function addComment() {
    const commentText = document.querySelector('.comment textarea').value;
    if (commentText.trim()) {
        const commentItem = document.createElement('div');
        commentItem.className = 'comment-item';
        commentItem.style.animation = 'fadeIn 1s ease-in-out';
        commentItem.innerHTML = `<p>${commentText}</p>`;
        document.querySelector('.existing-comments').appendChild(commentItem);
        document.querySelector('.comment textarea').value = '';
    }
}

function goToHome() {
    window.location.href = '/accueil';
}

// Function to handle scroll animations
window.addEventListener('scroll', () => {
    const elements = document.querySelectorAll('.fade-in-on-scroll');
    elements.forEach(element => {
        const position = element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        if (position < windowHeight - 100) {
            element.classList.add('fade-in');
        }
    });
});