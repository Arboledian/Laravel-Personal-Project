@props(['comments'])
<link rel="stylesheet" href="/css/comments.css" />
<div class="border border-red-400 post-comments">
    {{ $slot }}
    {{-- diferenciar vista auth y guest --}}
    @auth


        <!--post comment box -->
        <form method="POST" action="/comments.store">
            @csrf
            <div class="post-exterior">
                <div class="post-box">
                    <div class="text-space form-group">
                        <textarea name="content" class="post-input form-control" required placeholder="post a comment"></textarea>
                    </div>
                    <div class="button-space">
                        <button type="submit" class="btn btn-primary post-button">
                            Submit
                        </button>
                        {{--
                            <button class="post-button">
                                Cancel
                            </button>
                            --}}
                    </div>
                </div>
            </div>
        </form>
    @else
        <!--post comment box -->
        <div>
            <h1>Log to Comment</h1>
        </div>
    @endauth

    <!--comentarios-->




    <div id="first" class="comment-box">
        <div class="primero mb-0">
            <div class="vote-controller m-0">
                <span class="vote-up"><i class="fa fa-chevron-up relative z-5" aria-hidden="true"></i></span>
                <span class="points">10</span>
                <span class="vote-down"><i class="fa fa-chevron-down relavite z-5" aria-hidden="true"></i></span>
            </div>
            <div class="collapser">
                <span class="collapser-bar show-replies"></span>
            </div>
        </div>
        <div class="segundo">
            <div class="comment-content">
                <div class="user"><span><i class="fa-solid fa-user mr-2"></i> elpepe</span></div>
                <div class="comment-text">
                    <p>PERO QUE BUENA PAGINA LPTM</p>
                </div>
                <div class="details">
                    <a class="reply-b">reply</a>
                </div>
            </div>
        </div>
    </div>

    <div id="first" class="comment-box">
        <div class="primero mb-0">
            <div class="vote-controller m-0">
                <span class="vote-up"><i class="fa fa-chevron-up relative z-5" aria-hidden="true"></i></span>
                <span class="points">10</span>
                <span class="vote-down"><i class="fa fa-chevron-down relavite z-5" aria-hidden="true"></i></span>
            </div>
            <div class="collapser">
                <span class="collapser-bar show-replies"></span>
            </div>
        </div>
        <div class="segundo">
            <div class="user"><span><i class="fa-solid fa-user mr-2"></i> elpepe</span></div>
            <div class="comment-content">
                <div class="comment-text">
                    <p>PERO QUE BUENA PAGINA LPTM</p>
                </div>
                <div class="details">
                    <a class="reply-b">reply</a>
                </div>
            </div>
            <div id="first" class="comment-box">
                <div class="primero mb-0">
                    <div class="vote-controller m-0">
                        <span class="vote-up"><i class="fa fa-chevron-up relative z-5" aria-hidden="true"></i></span>
                        <span class="points">10</span>
                        <span class="vote-down"><i class="fa fa-chevron-down relavite z-5"
                                aria-hidden="true"></i></span>
                    </div>
                    <div class="collapser">
                        <span class="collapser-bar show-replies"></span>
                    </div>
                </div>
                <div class="segundo">
                    <div class="user "><span><i class="fa-solid fa-user mr-2"></i> elpepe</span></div>
                    <div class="comment-content">
                        <div class="comment-text">
                            <p>PERO QUE BUENA PAGINA LPTM</p>
                        </div>
                        <div class="details">
                            <a class="reply-b">reply</a>
                        </div>
                    </div>
                    <div id="first" class="comment-box">
                        <div class="primero mb-0">
                            <div class="vote-controller m-0">
                                <span class="vote-up"><i class="fa fa-chevron-up relative z-5"
                                        aria-hidden="true"></i></span>
                                <span class="points">10</span>
                                <span class="vote-down"><i class="fa fa-chevron-down relavite z-5"
                                        aria-hidden="true"></i></span>
                            </div>
                            <div class="collapser">
                                <span class="collapser-bar show-replies"></span>
                            </div>
                        </div>
                        <div class="segundo">
                            <div class="user "><span><i class="fa-solid fa-user mr-2"></i> elpepe</span></div>
                            <div class="comment-content">
                                <div class="comment-text">
                                    <p>PERO QUE BUENA PAGINA LPTM</p>
                                </div>
                                <div class="details">
                                    <a class="reply-b">reply</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="/js/comments.js"></script>
