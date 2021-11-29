@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-5">
    <div class="lg:pl-64">
        <div class="flex gap-4 text-white font-semibold mb-5">
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

            <div>
                <button class="flex items-center gap-2 py-3 px-4 rounded-md font-semibold" style="color: #4f4f4f; background: #1e2122" id="check" disabled form="check-form">
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.62 0.596L7.815 9.81L7.087 9.777L4 5.382L4.754 4.852L7.498 8.759L14.917 0L15.62 0.596Z" fill="#4F4F4F"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.234 5.774L11.62 0.596L10.917 0L6.687 4.994L7.234 5.774ZM5.684 6.177L6.232 6.957L5.685 6.177H5.684ZM4.067 8.087L4.614 8.867L3.815 9.81L3.087 9.777L0 5.382L0.754 4.852L3.498 8.759L4.068 8.087H4.067Z" fill="#4F4F4F"/>
                        </svg>                                                                       
                    Kiểm tra</button>
            </div>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success mb-5">
                {{ session()->get('message') }}
            </div>
        @endif

        <form action="{{ route('result') }}" 
                method="post" 
                class="lg:w-3/5" 
                enctype="multipart/form-data"
                id="check-form">
                @csrf
            <input type="text" name="title" class="w-full form-input mb-3 text-white" style="background: #181A1B; border: 1px solid #4f4f4f" placeholder="Tên file, tên thí sinh...">
            <textarea name="content" id="content" placeholder="Nhập nội dung..." style="background: #1E2122;" class="w-full pl-3 pt-3 rounded-md text-white leading-9"></textarea>
        </form>

    </div>

    <script>
        let button = document.getElementById('check')
        let imgCheck = document.querySelectorAll('button#check svg path')
        let form = document.getElementById('check-form')
        function submitForm() {
            form.submit()
        }

        ClassicEditor
        .create(document.querySelector('#content'))
        .then(editor => {
            editor.model.document.on('change:data', function() {
                console.log(editor.getData())
                let editorData = editor.getData()
                if (editorData === '' || editorData === undefined) {
                    button.disabled = true
                    button.style.backgroundColor = "#1E2122"
                    button.style.color = "#4f4f4f"
                    for(item of imgCheck) {
                        // console.log(item.fill)
                        item.setAttribute('fill','#4f4f4f')
                    }
                } else {
                    button.disabled = false
                    button.style.backgroundColor = "#058BFF"
                    button.style.color = "#ffffff"
                    for(item of imgCheck) {
                        // console.log(item.fill)
                        item.setAttribute('fill','#ffffff')
                    }
                }
            })
        

        })
        .catch( error => {
            console.log( error );
        });

    </script>
    {{-- <script>
        let content = document.getElementById('content')
        let button = document.getElementById('check')
        let imgCheck = document.querySelectorAll('button#check svg path')
        console.log(content)
        // console.log(imgCheck)
        content.oninput = function(e) {
            // console.log(e.target.value)
            // console.log(content.value)
            if (e.target.value === undefined || e.target.value === '') {
                button.disabled = true
                button.style.backgroundColor = "#1E2122"
                button.style.color = "#4f4f4f"
                for(item of imgCheck) {
                    // console.log(item.fill)
                    item.setAttribute('fill','#4f4f4f')
                }
            } else {
                button.disabled = false
                button.style.backgroundColor = "#058BFF"
                button.style.color = "#ffffff"
                for(item of imgCheck) {
                    // console.log(item.fill)
                    item.setAttribute('fill','#ffffff')
                }
            }
        } 
    </script> --}}

</main>
@endsection
