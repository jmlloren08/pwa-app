if('serviceWorker' in navigator){
    navigator.serviceWorker.register('sw.js')
    .then((reg) => console.log('service worker registered', reg))
    .catch((err) => console.log('service worker not registered', err))
}

var deferredPrompt;
window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();
    deferredPrompt = e;
    btnAdd.style.display = 'block';
});

btnAdd.addEventListener('click', (e) => {
    deferredPrompt.prompt();
    deferredPrompt.userChoice.then((choiceResult) => {
        if (choiceResult.outcome === 'accepted') {
            console.log('User accepted the A2HS prompt');
        }
        deferredPrompt = null;
    });
});

window.addEventListener('appinstalled', (evt) => {
    app.logEvent('a2hs', 'app installed');
});
