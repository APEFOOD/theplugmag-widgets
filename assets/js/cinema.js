function toggleVideo() {
    const videoWrapper = document.querySelector('.video-wrapper');
    const thumbnail = document.querySelector('.video-thumbnail');

    if (thumbnail) {
        thumbnail.style.display = 'none';
    }
    
    if (videoWrapper) {
        videoWrapper.style.display = 'block';

        // Check if iframe already exists
        let iframe = videoWrapper.querySelector('iframe');
        if (!iframe) {
            const videoId = thumbnail.getAttribute('data-youtube-id');

            iframe = document.createElement('iframe');
            iframe.setAttribute('src', `https://www.youtube.com/embed/${videoId}?autoplay=1`);
            iframe.setAttribute('frameborder', '0');
            iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
            iframe.setAttribute('allowfullscreen', '');

            // Setting the styles for the iframe
            iframe.style.position = 'absolute';
            iframe.style.top = '0';
            iframe.style.left = '0';
            iframe.style.width = '100%';
            iframe.style.height = '100%';

            videoWrapper.appendChild(iframe);
        }
    }
}

export { toggleVideo };
