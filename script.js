document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var event = document.getElementById('event').value;
    alert('Registration Successful!\nName: ' + name + '\nEmail: ' + email + '\nEvent: ' + event);
});
