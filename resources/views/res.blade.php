@extends('layouts.app')

@section('content')
<main class="sm:mx-auto sm:mt-5">
    <div class="lg:px-64">
        <div class="flex gap-4 text-white font-semibold mb-5">
            <div>
                <button class="flex items-center gap-2 py-3 px-4 bg-gray-400 rounded-md font-semibold" onclick="window.location='{{ route('home') }}'">
                    <i class="fa fa-home"></i>
                    Trang chủ
                </button>
            </div>

            <div>
                <button class="flex items-center gap-2 py-3 px-4 bg-orange-400 rounded-md font-semibold" onclick="window.location='{{ route('showAllPosts') }}'">
                <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.02704 2.05409C1.59426 2.05409 2.05409 1.59426 2.05409 1.02704C2.05409 0.459823 1.59426 0 1.02704 0C0.459823 0 0 0.459823 0 1.02704C0 1.59426 0.459823 2.05409 1.02704 2.05409Z" fill="white"/>
                    <path d="M1.02704 6.16227C1.59426 6.16227 2.05409 5.70245 2.05409 5.13523C2.05409 4.56801 1.59426 4.10818 1.02704 4.10818C0.459823 4.10818 0 4.56801 0 5.13523C0 5.70245 0.459823 6.16227 1.02704 6.16227Z" fill="white"/>
                    <path d="M1.02704 10.2705C1.59426 10.2705 2.05409 9.81063 2.05409 9.24341C2.05409 8.67619 1.59426 8.21637 1.02704 8.21637C0.459823 8.21637 0 8.67619 0 9.24341C0 9.81063 0.459823 10.2705 1.02704 10.2705Z" fill="white"/>
                    <path d="M15 0.939731C15 0.803536 14.9459 0.67292 14.8496 0.576616C14.7533 0.480312 14.6227 0.426208 14.4865 0.426208H3.48682V1.45325H14.4865C14.6227 1.45325 14.7533 1.39915 14.8496 1.30285C14.9459 1.20654 15 1.07593 15 0.939731Z" fill="white"/>
                    <path d="M14.4865 4.53439H3.48682V5.56144H14.4865C14.6227 5.56144 14.7533 5.50733 14.8496 5.41103C14.9459 5.31473 15 5.18411 15 5.04792C15 4.91172 14.9459 4.7811 14.8496 4.6848C14.7533 4.5885 14.6227 4.53439 14.4865 4.53439Z" fill="white"/>
                    <path d="M14.4865 8.64258H3.48682V9.66962H14.4865C14.6227 9.66962 14.7533 9.61552 14.8496 9.51922C14.9459 9.42291 15 9.29229 15 9.1561C15 9.01991 14.9459 8.88929 14.8496 8.79298C14.7533 8.69668 14.6227 8.64258 14.4865 8.64258Z" fill="white"/>
                    </svg>
                    Danh sách</button>
            </div>

            <div>
                <button class="flex items-center gap-2 py-3 px-4 bg-green-400 rounded-md font-semibold" onclick="window.location='{{ route('showWord') }}'">
                    <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0.5C0 0.367392 0.0526785 0.240215 0.146447 0.146447C0.240215 0.0526785 0.367392 0 0.5 0H8.5C8.63261 0 8.75979 0.0526785 8.85355 0.146447C8.94732 0.240215 9 0.367392 9 0.5C9 0.632608 8.94732 0.759785 8.85355 0.853553C8.75979 0.947321 8.63261 1 8.5 1H0.5C0.367392 1 0.240215 0.947321 0.146447 0.853553C0.0526785 0.759785 0 0.632608 0 0.5ZM0 8.5C0 8.36739 0.0526785 8.24021 0.146447 8.14645C0.240215 8.05268 0.367392 8 0.5 8H7.5C7.63261 8 7.75979 8.05268 7.85355 8.14645C7.94732 8.24021 8 8.36739 8 8.5C8 8.63261 7.94732 8.75979 7.85355 8.85355C7.75979 8.94732 7.63261 9 7.5 9H0.5C0.367392 9 0.240215 8.94732 0.146447 8.85355C0.0526785 8.75979 0 8.63261 0 8.5ZM0.5 4C0.367392 4 0.240215 4.05268 0.146447 4.14645C0.0526785 4.24021 0 4.36739 0 4.5C0 4.63261 0.0526785 4.75979 0.146447 4.85355C0.240215 4.94732 0.367392 5 0.5 5H11.5C11.6326 5 11.7598 4.94732 11.8536 4.85355C11.9473 4.75979 12 4.63261 12 4.5C12 4.36739 11.9473 4.24021 11.8536 4.14645C11.7598 4.05268 11.6326 4 11.5 4H0.5Z" fill="white"/>
                        </svg>                        
                    Từ khóa</button>
            </div>
            @if (Route::currentRouteName() == 'result')
                <div>
                    <button class="flex items-center gap-2 py-3 px-4 rounded-md font-semibold" style="background: #058BFF" form="save-form">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 1C1.73478 1 1.48043 1.10536 1.29289 1.29289C1.10536 1.48043 1 1.73478 1 2V10C1 10.2652 1.10536 10.5196 1.29289 10.7071C1.48043 10.8946 1.73478 11 2 11V7.5C2 7.10218 2.15804 6.72064 2.43934 6.43934C2.72064 6.15804 3.10218 6 3.5 6H8.5C8.89782 6 9.27936 6.15804 9.56066 6.43934C9.84196 6.72064 10 7.10218 10 7.5V11C10.2652 11 10.5196 10.8946 10.7071 10.7071C10.8946 10.5196 11 10.2652 11 10V3.62C10.9999 3.3548 10.8945 3.10049 10.707 2.913L9.086 1.292C8.89834 1.10482 8.64405 0.999791 8.379 1H8V2.5C8 2.89782 7.84196 3.27936 7.56066 3.56066C7.27936 3.84196 6.89782 4 6.5 4H4.5C4.10218 4 3.72064 3.84196 3.43934 3.56066C3.15804 3.27936 3 2.89782 3 2.5V1H2ZM4 1V2.5C4 2.63261 4.05268 2.75979 4.14645 2.85355C4.24021 2.94732 4.36739 3 4.5 3H6.5C6.63261 3 6.75979 2.94732 6.85355 2.85355C6.94732 2.75979 7 2.63261 7 2.5V1H4ZM9 11V7.5C9 7.36739 8.94732 7.24021 8.85355 7.14645C8.75979 7.05268 8.63261 7 8.5 7H3.5C3.36739 7 3.24021 7.05268 3.14645 7.14645C3.05268 7.24021 3 7.36739 3 7.5V11H9ZM0 2C0 1.46957 0.210714 0.960859 0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0H8.379C8.90939 0.000113275 9.41801 0.210901 9.793 0.586L11.414 2.207C11.7891 2.58199 11.9999 3.09061 12 3.621V10C12 10.5304 11.7893 11.0391 11.4142 11.4142C11.0391 11.7893 10.5304 12 10 12H2C1.46957 12 0.960859 11.7893 0.585786 11.4142C0.210714 11.0391 0 10.5304 0 10V2Z" fill="white"/>
                            </svg>                                                                                             
                        Lưu</button>
                </div>
                <div class="flex justify-center items-center py-2 px-4 bg-white rounded-md text-green-700 bg-green-100 border border-green-300" id="success-notification" style="display: none">
                    <div slot="avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="font-normal max-w-full">Lưu thành công</div>
                </div>
            @endif
        </div>



        <div class="grid grid-cols-3 gap-4">
            <form action="{{ route('savePost') }}" method="post" id="save-form" class="w-full col-span-2"> @csrf
                <input type="text" name="title" id="title" class="w-full form-input mb-3 text-white" style="background: #181A1B; border: 1px solid #4f4f4f" value="{{ $title }}" @if (Route::currentRouteName() == 'result')
                    required
                @else
                    readonly
                @endif>
                <div name="content" id="content" rows="20" style="background: #1E2122;" class="w-full p-3 rounded-md text-white leading-8">{!! $content !!}</div>
            </form>

            <div class="text-white text-sm">
                <div class="py-3 rounded px-2 text-white text-sm" style="border-bottom: 1px solid #4f4f4f; background: #1E2122"><span id="count">{{ $count }}</span> từ vi phạm</div>
                <div style="background: #1E2122">
                    @if ($count != 0)            
                        <div class="py-4 px-2 flex gap-2 flex-wrap">
                            @foreach ($checkedWords as $word)                
                                <div class="px-2 py-1 rounded text-white invalid-word" style="background: #732828">{{ $word }}</div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </div>

    <script>
        const saveForm = document.getElementById('save-form')  
        saveForm.addEventListener('submit', function (e) { 
            e.preventDefault() 
            // Get count
            const countElement = document.getElementById('count')
            const count = parseInt(countElement.textContent)
            console.log(count)
    
            const titleElement = document.getElementById('title')
            const title = titleElement.value
            // Get content
            const contentElement = document.getElementById('content')
            const content = contentElement.innerHTML
            // console.log(content)

            const invalidWordElement = document.getElementsByClassName('invalid-word')
            const invalidWords = []
            for(let item of invalidWordElement) {
                invalidWords.push(item.innerHTML)
            }
            const errorList = invalidWords.join(' | ');
            console.log(errorList)
            // const formData = new FormData(saveForm)
            // formData.append('content', content)
            // formData.append('count', count)
            // console.log(formData.values())

            const payload = {
                title,
                content,
                count,
                errorList
            }
            console.log(payload)
            const xhr = new XMLHttpRequest()

            xhr.open('POST', saveForm.action)
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    let status = xhr.status
                    if (status === 200) {
                        $('#success-notification').fadeIn('slow', function() {
                            $('#success-notification').delay(3000).fadeOut()
                        })
                    }
                }
            }
            xhr.setRequestHeader("Content-type", "application/json; charset=utf-8;") //; charset=utf-8; boundary=" + Math.random().toString().substr(2))
            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'))
            xhr.send(JSON.stringify(payload))
        })

    </script>
</main>
@endsection