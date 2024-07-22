<div class="p-body-header">
    <div class="pageContent">
        <div class="uix_headerInner">
            <div class="p-title ">
                <h1 class="p-title-value">{{ $meta_title }}</h1>
            </div>
            @if (!empty($description))
                <div class="p-description">
                    @php echo $description; @endphp
                </div>
            @endif
        </div>
        <div class="uix_headerInner--opposite">
            <div class="p-title-pageAction">
                <a href="/whats-new/posts/" class="button button--icon button--icon--bolt rippleButton"><span
                        class="button-text">
                        Bài viết mới
                    </span></a>
            </div>
        </div>
    </div>
</div>
