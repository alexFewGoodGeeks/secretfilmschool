<footer id="footer" class="footer">
    <div class="social-media-wrapper">
        <ul class="social-media-list">
            @if(!empty($settings->fb_link))
            <li class="social-media-item">
                <a href="{{ $settings->fb_link }}" target="_blank" class=" fb-icon">
                    <img class="social-media-icon" src="{{ asset('images/fb_icon.png') }}" alt="facebook" title="facebook" />
                </a>
            </li>
            @endif
            @if (!empty($settings->tt_link))
            <li class="social-media-item">
                <a href="{{ $settings->tt_link }}" target="_blank" class="social-media-icon tt-icon">
                    <img class="social-media-icon"  src="{{ asset('images/tt_icon.png') }}" alt="tiktok" title="tiktok" />
                </a>
            </li>
            @endif
            @if(!empty($settings->yt_link))
            <li class="social-media-item">
                <a href="{{ $settings->yt_link }}" target="_blank" class="social-media-icon yt-icon">
                    <img class="social-media-icon"  src="{{ asset('images/yt_icon.png') }}" alt="youtube" title="youtube" />
                </a>
            </li>
            @endif
            @if(!empty($settings->ig_link))
            <li class="social-media-item">
                <a href="{{ $settings->ig_link }}" target="_blank" class="social-media-icon ig-icon">
                    <img class="social-media-icon"  src="{{ asset('images/ig_icon.png') }}" alt="instagram" title="instagram" />
                </a>
            </li>
            @endif
        </ul>
    </div>
</footer>
