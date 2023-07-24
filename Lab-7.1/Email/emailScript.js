function checkEmail() {
    let email = document.getElementById('email').value;
    if (email.trim() === '') {
        alert('Field cannot be empty.');
        return;
    }
    
    for (let i = 0; i < email.length; i++) {
        if (email[i] === '@') {
            alert('Email Accepted');
            return;
        }
    }

    alert('Email Rejected');
}
