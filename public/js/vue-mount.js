// Minimal Vue mount script (uses global Vue from CDN)
(function () {
    if (typeof Vue === 'undefined') {
        console.warn('Vue not found on window. Make sure CDN script loaded.');
        return;
    }

    const { createApp, h } = Vue;

    const App = {
        name: 'MMGWidget',
        data() {
            return {
                message: 'Welcome to MMG Autozone!'
            };
        },
        template: `
            <div class="mmg-widget" style="padding:16px;margin-bottom:16px;border-radius:8px;background:linear-gradient(90deg,var(--mmg-3),var(--mmg-4));color:#fff;">
                <h2 style="margin:0">{{ message }}</h2>
            </div>
        `
    };

    // Mount non-destructively: create a small container and prepend it so existing
    // server-rendered content remains below the Vue widget.
    const mountEl = document.getElementById('vue-root');
    if (mountEl) {
        const container = document.createElement('div');
        container.id = 'mmg-vue-root';
        // insert at top of mountEl so page content stays intact
        if (mountEl.firstChild) mountEl.insertBefore(container, mountEl.firstChild);
        else mountEl.appendChild(container);

        const vm = createApp(App);
        vm.mount(container);
    } else {
        console.warn('#vue-root not found — Vue widget not mounted.');
    }
})();
