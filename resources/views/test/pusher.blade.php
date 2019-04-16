@extends ('master.layout')

@section ('content')
    <section class="section">
        <div class="container">
            {{ Breadcrumbs::render('pusher') }}

            <article class="message">
                <div class="message-header">
                    <p>Test Pusher</p>
                </div><!-- message-header -->
            
                <div class="message-body">
                    <form method="post" action="{{ route('test.push.message') }}">
                        @csrf

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="message">Message:</label>
                            </div><!-- field-label -->
                        
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <textarea id="message" name="message" rows="5" class="textarea" autofocus></textarea>
                                    </div><!-- control -->
                        
                                    <p class="help is-danger">{{ $errors->first('message') }}</p>
                                </div><!-- field -->
                            </div><!-- field-body -->
                        </div><!-- field -->

                        <div class="field is-horizontal">
                            <div class="field-label is-normal"></div><!-- field-label -->
                        
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Broadcast</button>
                                    </div><!-- control -->
                                </div><!-- field -->
                            </div><!-- field-body -->
                        </div><!-- field -->
                    </form>
                </div><!-- message-body -->
            </article><!-- message -->
        </div><!-- container -->
    </section><!-- section -->
@endsection
