@extends ('master.layout')

@section ('content')
    <section class="section">
        <div class="container">
            {{ Breadcrumbs::render('mail') }}

            <article class="message">
                <div class="message-header">
                    <p>Send Email</p>
                </div><!-- message-header -->
            
                <div class="message-body">
                    @include ('master.message')

                    <form method="post" action="{{ route('test.mail.send') }}">
                        @csrf

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="subject">Subject:</label>
                            </div><!-- field-label -->
                        
                            <div class="field-body">
                                <div class="field">
                                    <div class="control has-icons-right">
                                        <input type="text" id="subject" name="subject"
                                            class="input {{ $errors->has('subject') ? ' is-danger' : '' }}"
                                            value="{{ old('subject') }}" autofocus>
                        
                                        <span class="icon is-small is-right">
                                            <i class="fas fa-tag"></i>
                                        </span><!-- icon -->
                                    </div><!-- control -->
                        
                                    <p class="help is-danger">{{ $errors->first('subject') }}</p>
                                </div><!-- field -->
                            </div><!-- field-body -->
                        </div><!-- field -->

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="address">To:</label>
                            </div><!-- field-label -->
                        
                            <div class="field-body">
                                <div class="field">
                                    <div class="control has-icons-right">
                                        <input type="email" id="address" name="address"
                                            class="input {{ $errors->has('address') ? ' is-danger' : '' }}"
                                            value="{{ old('address') }}">
                        
                                        <span class="icon is-small is-right">
                                            <i class="fas fa-envelope"></i>
                                        </span><!-- icon -->
                                    </div><!-- control -->
                        
                                    <p class="help is-danger">{{ $errors->first('address') }}</p>
                                </div><!-- field -->
                            </div><!-- field-body -->
                        </div><!-- field -->

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="message">Message:</label>
                            </div><!-- field-label -->
                        
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <textarea id="message" name="message" rows="3" class="textarea"></textarea>
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
                                        <button type="submit" class="button is-primary">Submit</button>
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
