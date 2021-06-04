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
            @if (!empty($settings->tw_link))
            <li class="social-media-item">
                <a href="{{ $settings->tw_link }}" target="_blank" class="social-media-icon tw-icon">
                    <img class="social-media-icon"  src="{{ asset('images/tw_icon.png') }}" alt="twitter" title="twitter" />
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
