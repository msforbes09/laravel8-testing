@if (session('message'))
    <article class="message is-success">
        <div class="message-body">
            <p class="subtitle is-6">{!! session('message') !!}</p>
        </div><!-- message-body -->
    </article><!-- message -->
@endif
