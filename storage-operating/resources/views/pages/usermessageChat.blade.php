<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body>
<div class="justify-content-center" style="display: flex; justify-content: center; align-items:center;">
    <div class="card col-md-6 direct-chat direct-chat-primary" style="height: 70vh; ">
        <div class="card-header">
            <h3 class="card-title">Chat</h3>

        </div>
        <div class="card-body">
            <!-- {{$me = rand(1, 8)}} -->
            <!-- {{$notme = rand(1, 8)}} -->
            <div class="direct-chat-messages" style="height: 100%" >
                {{-- @foreach ($conversations as $conversation0)
                    @if ($conversation0->sender_id ==  Auth::user()->id)
                         <!--- {{$conversation = $conversation0}} -->
                         <!--- {{$sender_id=""}} -->
                         @endif
                @endforeach --}}
                @foreach ($messages as $message)
                    @if (!($message->sender_id == Auth::user()->id))
                        <!-- Message. Default to the left -->
                        <!-- {{$sender_id = $message->sender_id}} -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                                @foreach ($conversations as $conversation0)
                                @if ($conversation0->sender_id ==  Auth::user()->id)
                                     <!--- {{$conversation = $conversation0}} -->
                                     <!--- {{$sender_id=""}} -->
                                     <span class="direct-chat-name float-left">{{$conversation->sender_email}} </span>
                                     <span class="direct-chat-timestamp float-right">{{$message->created_at}}</span>
                                     @endif
                            @endforeach
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="{{asset('dist/img/user' . $notme . '-128x128.jpg')}}" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                {{$message->message}}
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                    @else
                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">{{Auth::user()->email}}</span>
                                <span class="direct-chat-timestamp float-left">{{$message->created_at}}</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="{{asset('dist/img/user' . $me . '-128x128.jpg')}}" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                {{$message->message}}
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                    @endif
                @endforeach
            </div>
            <!--/.direct-chat-messages-->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <form action="{{route('usermessageChat.post')}}" method="post">
                @csrf
                <div class="input-group">
                    <input name="message" placeholder="Mesaj yaz..." class="form-control">
                    <input name="sender_id" value="{{Auth::user()->id}}" hidden>
                    <input name="receiver_id" value="{{$sender_id}}" hidden>
                    <span class="input-group-append">
                        <button type="submit" class="btn btn-primary">Gönder</button>
                    </span>
                </div>
            </form>
        </div>
        <!-- /.card-footer-->
    </div>
    <script>
        const messagesDiv = document.querySelector('.direct-chat-messages');
          messagesDiv.scrollTop = messagesDiv.scrollHeight;
    </script>

    <!--/.direct-chat -->
</div>
</body>
</html>
