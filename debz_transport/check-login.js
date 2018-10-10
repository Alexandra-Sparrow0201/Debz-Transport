var loggedIn = localStorage.getItem('loggedIn');
			
if(!loggedIn) {
	alert('Not logged in! Redirecting...');
	window.location = 'login.html';
}