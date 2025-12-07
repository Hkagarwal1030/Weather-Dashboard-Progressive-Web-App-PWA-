// Install event - cache files
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open('v1').then(cache => {
      return cache.addAll([
        'index.html',
        'manifest.json',
        'bootstrap/css/bootstrap.min.css' // ← Corrected path
      ]);
    })
  );
});

// Fetch event - serve cached content if available
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request).then(response => {
      return response || fetch(event.request);
    })
  );
});
