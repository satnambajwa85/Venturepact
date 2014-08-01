/*$('#gitLink').click(function(){
				$('#DeveloperRegister_url_0').removeClass('required');
				$('#DeveloperRegister_project_0').removeClass('required');
				$('#DeveloperRegister_language_0').removeClass('required');
});*/

if($('#gitText').html()=="Connected")
{
				$('#DeveloperRegister_url_0').removeClass('required');
				$('#DeveloperRegister_project_0').removeClass('required');
				$('#DeveloperRegister_language_0').removeClass('required');
}

jQuery(function($){
	var ghUrl = 'https://api.github.com/authorizations'
	var form = $('#ghAuthApi')
	var responseForm = $('#ghAuthApiResponse')
	var reformat = function(array){
		var obj = {};
		for(i=0; i<array.length; i++){
			var a = array[i]
			var name = a.name
			var value = a.value
			if(!value){
				continue
			}
			if(obj[name]){
				if(typeof obj[name] != 'object'){
					var hold = obj[name]
					obj[name] = []
					obj[name].push(hold)
				}
				obj[name].push(value)
				} else {
					obj[name] = value
				}
			}
			return obj
		}
	
	form.submit(function(){
		var userData = reformat(form.serializeArray())
		if(typeof _gaq != 'undefined'){
			_gaq.push(['_trackEvent', 'BlogScript', 'submit', 'oAuth Token'])
		}
		if(testEmail($("#inputUsername").val())){
			$('#gitError').html('Please enter your GitHub Username');
			$('#gitError').fadeIn();
			return false;
		}
		$.ajax(ghUrl, {
			type: 'POST',
			crossDomain: true,
			data: JSON.stringify({
				note: userData.note,
				scopes: userData.scopes
			}),
			beforeSend: function(xhr){
				xhr.setRequestHeader("Authorization",
				"Basic "+btoa(userData.username+':'+userData.password)+'=')
			},
			success: function(data, status, response){
				$('#gitLink').attr("href",'http://github.com/'+$('#inputUsername').val());
				$('#gitHubURL').val('http://github.com/'+$('#inputUsername').val());
				$('#gitLink').attr("target",'_blank');
				$('#gitLink').removeClass("popup");
				$('#gitLink').addClass("reloadPage");
				$('#gitText').html('Connected');
				$('#DeveloperRegister_url_0').removeClass('required');
				$('#DeveloperRegister_project_0').removeClass('required');
				$('#DeveloperRegister_language_0').removeClass('required');
				unloadPopupBox();
				postForm();
			},
			error: function(response, status, error){
				responseForm.find('.alert').hide()
				if(response.responseText.length > 0){
					var data = JSON.parse(response.responseText)
					if(data.message){
						$('#gitError').html('Error communicating with GitHub: '+data.message)
						$('#gitError').fadeIn()
						if(typeof _gaq != 'undefined'){
							_gaq.push(['_trackEvent', 'BlogScript', 'error', 'oAuth Token: '+data.message])
						}
						return
					}
				}
				$('#gitError').html('Error communicating with GitHub: '+error)
				$('#gitError').fadeIn()
				if(typeof _gaq != 'undefined'){
					_gaq.push(['_trackEvent', 'BlogScript', 'error', 'oAuth Token: '+error])
				}
			}
		})
		return false
	})
})