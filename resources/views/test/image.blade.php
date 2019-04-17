@extends ('master.layout')

@section ('content')
    <section class="section">
        <div class="container">
            {{ Breadcrumbs::render('image') }}

            <article class="message">
                <div class="message-header">
                    <p>Manipulate an Image</p>
                </div><!-- message-header -->
            
                <div class="message-body">
                    @include ('master.message')

                    <form method="post" action="{{ route("test.image.upload") }}" enctype="multipart/form-data">
                        @csrf

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="image">Image:</label>
                            </div><!-- field-label -->
                        
                            <div class="field-body">
                                <div class="field">
                                    <div class="file has-name is-fullwidth is-link">
                                        <label class="file-label">
                                            <input class="file-input" type="file" id="image" name="image">
                                            
                                            <span class="file-cta">
                                                <span class="file-icon">
                                                    <i class="fas fa-upload"></i>
                                                </span>
                                    
                                                <span class="file-label">Choose a file…</span>
                                            </span><!-- file-cta -->
                                    
                                            <span class="file-name">Placeholder</span>
                                        </label><!-- file-label -->
                                    </div><!-- file -->

                                    <p class="help is-danger">{{ $errors->first('image') }}</p>
                                </div><!-- field -->
                            </div><!-- field-body -->
                        </div><!-- field -->

                        <div class="field is-horizontal">
                            <div class="field-label is-normal"></div><!-- field-label -->
                        
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Upload</button>
                                    </div><!-- control -->
                                </div><!-- field -->
                            </div><!-- field-body -->
                        </div><!-- field -->
                    </form>

                    @if ($image)
                        <hr>

                        <p class="has-text-centered">
                            <a href="{{ route('test.image.preview') }}"><img src="{{ asset("thumbnail/{$image->filename}") }}"></a>
                        </p>

                        <p class="label has-text-centered">Click me.</p>
                    @endif
                </div><!-- message-body -->
            </article><!-- message -->
        </div><!-- container -->
    </section><!-- section -->
@endsection
