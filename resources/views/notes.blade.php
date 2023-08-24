<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Notes</title>

  <link href="css/notes.css" rel="stylesheet">

  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

    

  <main>




        <div class="container py-1">
            <div class="row" data-masonry='{"percentPosition": true }'>
                @foreach ($msg as $note)
                    <div class="col-sm-4 col-md-3 py-1">
                        <div class="card border-primary">
                            <div class="card-body">
                                <h3 class="card-title">{{ $note->title }}</h3>
                                <p class="card-text">{{ $note->content }}</p>
                                <a href="#" class="btn btn-outline-secondary">Outline</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    

    <div class="add">
        <a>
            {{-- <svg>
                <use xlink:href="#fileIcon">
            </svg> --}}
        </a>
        <a href="">
            <svg>
                <use xlink:href="#plus">
            </svg>
        </a>
        <a href="">
            <svg>
                <use xlink:href="#logout">
            </svg>
        </a>
        <a>
            {{-- <svg>
                <use xlink:href="#chatIcon">
            </svg> --}}
        </a>
    </div>

    
            
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="fileIcon">
            <path stroke="none" d="M14,0H3A1,1,0,0,0,2,1V23a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V8H15a1,1,0,0,1-1-1ZM5,17H19v2H5Zm0-5H19v2H5Zm6-3H5V7h6Z"></path>
            <polygon stroke="none" points="21.414 6 16 6 16 0.586 21.414 6"></polygon>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="imageIcon">
            <circle stroke="none" cx="9" cy="8" r="2"></circle>
            <path stroke="none" d="M23,1H1C0.448,1,0,1.447,0,2v20c0,0.553,0.448,1,1,1h22c0.552,0,1-0.447,1-1V2C24,1.447,23.552,1,23,1z M22,3v12l-5-5l-6,7l-5-4l-4,4V3H22z"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="mailIcon">
            <path stroke="none" d="M21,2H3A3,3,0,0,0,0,5V19a3,3,0,0,0,3,3H21a3,3,0,0,0,3-3V5A3,3,0,0,0,21,2ZM8.207,15.207l-2.5,2.5a1,1,0,0,1-1.414-1.414l2.5-2.5Zm11.5,2.5a1,1,0,0,1-1.414,0l-2.5-2.5,1.414-1.414,2.5,2.5A1,1,0,0,1,19.707,17.707Zm0-10-7,7a1,1,0,0,1-1.414,0l-7-7A1,1,0,0,1,5.707,6.293L12,12.586l6.293-6.293a1,1,0,1,1,1.414,1.414Z"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="chatIcon">
            <g stroke="none">
                <path d="M21.965,9.575C21.604,14.821,16.384,19,10,19c-0.465,0-0.931-0.026-1.394-0.072 c2.013,1.586,4.939,2.376,7.946,1.967L22,23.618v-5.215c1.293-1.243,2-2.791,2-4.403C24,12.373,23.277,10.822,21.965,9.575z"></path>
                <path d="M10,1C4.477,1,0,4.582,0,9c0,1.797,0.75,3.45,2,4.785V19l4.833-2.416C7.829,16.85,8.892,17,10,17 c5.523,0,10-3.582,10-8S15.523,1,10,1z"></path>
            </g>
        </symbol>
        
        <symbol id="logout" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
            <g stroke="none">
                <path stroke-width="2" stroke="white"  d="M 11.59375 22.625 L 5.332031 22.625 C 3.632812 22.625 2.253906 21.238281 2.253906 19.542969 L 2.253906 4.457031 C 2.253906 2.753906 3.636719 1.375 5.332031 1.375 L 11.695312 1.375 C 12.078125 1.375 12.382812 1.070312 12.382812 0.6875 C 12.382812 0.304688 12.078125 0 11.695312 0 L 5.332031 0 C 2.875 0 0.878906 2 0.878906 4.457031 L 0.878906 19.542969 C 0.878906 22.003906 2.878906 24 5.332031 24 L 11.59375 24 C 11.976562 24 12.28125 23.695312 12.28125 23.3125 C 12.28125 22.929688 11.96875 22.625 11.59375 22.625 Z M 11.59375 22.625 "/>
                <path stroke-width="2" stroke="white"  d="M 22.921875 11.515625 L 18.550781 7.144531 C 18.28125 6.875 17.847656 6.875 17.578125 7.144531 C 17.308594 7.414062 17.308594 7.847656 17.578125 8.117188 L 20.777344 11.316406 L 6.824219 11.316406 C 6.445312 11.316406 6.136719 11.625 6.136719 12.003906 C 6.136719 12.386719 6.445312 12.691406 6.824219 12.691406 L 20.777344 12.691406 L 17.578125 15.890625 C 17.308594 16.160156 17.308594 16.59375 17.578125 16.863281 C 17.710938 16.996094 17.890625 17.066406 18.0625 17.066406 C 18.234375 17.066406 18.414062 17 18.546875 16.863281 L 22.917969 12.492188 C 23.191406 12.21875 23.191406 11.78125 22.921875 11.515625 Z M 22.921875 11.515625 "/>
            </g>
        </symbol>

        <symbol id="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
            <g stroke="none">
            <path d="M 21.265625 9.1875 C 22.765625 9.175781 23.980469 10.378906 23.976562 11.878906 C 23.972656 13.378906 22.753906 14.601562 21.253906 14.613281 L 14.679688 14.660156 L 14.636719 21.242188 C 14.621094 22.730469 13.398438 23.933594 11.902344 23.929688 C 10.402344 23.929688 9.199219 22.722656 9.210938 21.234375 L 9.257812 14.699219 L 2.707031 14.746094 C 1.210938 14.757812 -0.00390625 13.550781 0 12.050781 C 0.00390625 10.550781 1.222656 9.328125 2.71875 9.316406 L 9.292969 9.269531 L 9.339844 2.6875 C 9.351562 1.203125 10.578125 0 12.074219 0 C 13.574219 0 14.777344 1.210938 14.765625 2.695312 L 14.71875 9.230469 Z M 21.265625 9.1875 "/>
            </g>
        </symbol>

    </svg>

    <svg style="display: none;  id="logoutIcon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
    viewBox="0 0 24 24" xml:space="preserve">
<g>
	<g>
		<path d="M227.619,444.2h-122.9c-33.4,0-60.5-27.2-60.5-60.5V87.5c0-33.4,27.2-60.5,60.5-60.5h124.9c7.5,0,13.5-6,13.5-13.5
			s-6-13.5-13.5-13.5h-124.9c-48.3,0-87.5,39.3-87.5,87.5v296.2c0,48.3,39.3,87.5,87.5,87.5h122.9c7.5,0,13.5-6,13.5-13.5
			S235.019,444.2,227.619,444.2z"/>
		<path d="M450.019,226.1l-85.8-85.8c-5.3-5.3-13.8-5.3-19.1,0c-5.3,5.3-5.3,13.8,0,19.1l62.8,62.8h-273.9c-7.5,0-13.5,6-13.5,13.5
			s6,13.5,13.5,13.5h273.9l-62.8,62.8c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4l85.8-85.8
			C455.319,239.9,455.319,231.3,450.019,226.1z"/>
	</g>
</g>
</svg>
                
    <!-- dribbble -->
    <a class="dribbble" href="https://dribbble.com/shots/5419580-Add-Button-hover-animation" target="_blank"><img src="https://cdn.dribbble.com/assets/dribbble-ball-mark-2bd45f09c2fb58dbbfb44766d5d1d07c5a12972d602ef8b32204d28fa3dda554.svg" alt=""></a>
  </main>

</body>

</html>