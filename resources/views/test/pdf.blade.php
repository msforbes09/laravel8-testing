@extends ('master.layout')

@section ('content')
    <section class="section">
        <div class="container">
            <article class="message">
                <div class="message-header">
                    <p>Generate PDF</p>
                </div><!-- message-header -->
            
                <div class="message-body">
                    <form method="post" action="{{ route('test.pdf.generate') }}">
                        @csrf

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="title">Title:</label>
                            </div><!-- field-label -->
                        
                            <div class="field-body">
                                <div class="field">
                                    <div class="control has-icons-right">
                                        <input type="text" id="title" name="title"
                                            class="input {{ $errors->has('title') ? ' is-danger' : '' }}"
                                            value="{{ old('title') }}" autofocus>
                        
                                        <span class="icon is-small is-right">
                                            <i class="fas fa-tag"></i>
                                        </span><!-- icon -->
                                    </div><!-- control -->
                        
                                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                                </div><!-- field -->
                            </div><!-- field-body -->
                        </div><!-- field -->

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="content">Content:</label>
                            </div><!-- field-label -->
                        
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <textarea id="content" name="content" rows="5" class="textarea"></textarea>
                                    </div><!-- control -->
                        
                                    <p class="help is-danger">{{ $errors->first('content') }}</p>
                                </div><!-- field -->
                            </div><!-- field-body -->
                        </div><!-- field -->

                        <div class="field is-horizontal">
                            <div class="field-label is-normal"></div><!-- field-label -->
                        
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Generate</button>
                                    </div><!-- control -->
                        
                                    <p class="help is-danger">{{ $errors->first('') }}</p>
                                </div><!-- field -->
                            </div><!-- field-body -->
                        </div><!-- field -->
                    </form>
                </div><!-- message-body -->
            </article><!-- message -->
        </div><!-- container -->
    </section><!-- section -->
@endsection
