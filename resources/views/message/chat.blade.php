@extends('master.layout')

@section('content')
    <div id="app" class="modal is-active">
        <div class="modal-background"></div>
        
        <div class="modal-card">
                {{ Breadcrumbs::render('chatbox') }}
            <header class="modal-card-head">
                <p class="modal-card-title">Chats</p>
            </header><!-- modal-card-head -->
    
            <section class="modal-card-body">
                <chat-messages :messages="messages"></chat-messages>
            </section><!-- modal-card-body -->
            
            <footer class="modal-card-foot">
                <chat-form
                    v-on:messagesent="addMessage"
                    :user="{{ Auth::user() }}"
                ></chat-form>
            </footer><!-- modal-card-foot -->
        </div><!-- modal-card -->
    </div><!-- modal -->
@endsection
