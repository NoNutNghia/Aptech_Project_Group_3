@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>EDIT ARTICLE VIRUS FORM</h2>
        <p>You must fill out all input about the article below:</p>
        <form action="{{route('articles.update', $article->id)}}" class="was-validated" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="form-group mb-4">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Name of virus" name="name" value="{{$article->name}}" required>
            </div>
            <div class="form-inline justify-content-lg-between mb-4" >
                <label for="year_originated">Year originated:</label>
                <input type="number" class="form-control " style="width: 100px" max="2022" name="year_originated" value="{{$article->year_originated}}" required>
                <label for="number_of_infections">Number of Infections (At this time):</label>
                <input type="number" class="form-control" name="number_of_infections" value="{{$article->detail->number_of_infections}}" required>
                <label for="number_of_death">Number of Death (At this time):</label>
                <input type="number" class="form-control" name="number_of_death" value="{{$article->detail->number_of_death}}" required>
            </div>
            <div class="form-inline mb-4">
                <label for="type_id" class="mr-3">Type of virus: </label>
                    <select name="type_id" class="custom-select col-3">
                        @foreach($type_viruses as $type_virus)
                            @if($article->type_id == $type_virus->id)
                                <option value="{{$type_virus->id}}" selected>{{$type_virus->type_virus}}</option>
                            @else
                                <option value="{{$type_virus->id}}">{{$type_virus->type_virus}}</option>
                            @endif
                        @endforeach
                    </select>
            </div>
            <div class="form-group">
                <label for="location_of_origin">Location of origin:</label>
                <input type="text" class="form-control" id="location_of_origin" placeholder="Location of origin" name="location_of_origin" value="{{$article->detail->location_of_origin}}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" rows="5" id="description" name="description" required>{{$article->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="spread">Way to spread:</label>
                <textarea class="form-control" rows="10" id="spread" name="spread" value="{{$article->name}}" required>{{$article->detail->spread}}</textarea>
            </div>
            <div class="form-group">
                <label for="detail_description">Detail description:</label>
                <textarea class="form-control" rows="10" id="detail_description" name="detail_description" required>{{$article->detail->detail_description}}</textarea>
            </div>
            <div class="form-group">
                <label for="precaution_required">Precaution required:</label>
                <textarea class="form-control" rows="10" id="precaution_required" name="precaution_required" required>{{$article->detail->precaution_required}}</textarea>
            </div>
            <p>Update image of virus: </p>
            <div class="form-inline mb-4" style="flex-flow: nowrap">
                <div class="custom-file mr-5" style="width: 50%">
                    <input id="inputImagePresent" type="file" class="custom-file-input" accept="image/*" name="img" onchange="loadImage(this)">
                    <label class="custom-file-label" style="justify-content: flex-start" for="customFile">Choose file</label>
                </div>
                <div style="width: 50%" class="mr-2">
                    <img id="imagePresent" class="img-fluid mx-auto rounded border" style="width: 100%; height: 100%;" src="*" alt="Upload image...">
                </div>
                <a style="display: none" role="button" class="btn btn-danger" onclick="removeImage(this)">Delete</a>
            </div>
            <div class="mb-3">
                <label for="image">
                    <strong>Image present:</strong>
                </label>
                <img src="{{asset('storage/' . $article->img)}}" alt="{{$article->name}}" width="100%">
            </div>
            <p>Update image detail about damage caused by virus: </p>
            <div class="form-inline mb-4" style="flex-flow: nowrap">
                <div class="custom-file mr-5" style="width: 50%">
                    <input type="file" class="custom-file-input" accept="image/*" name="img_detail" onchange="loadImage(this)">
                    <label class="custom-file-label" style="justify-content: flex-start" for="customFile">Choose file</label>
                </div>
                <div style="width: 50%" class="mr-2">
                    <img id="imageDetail" class="img-fluid mx-auto rounded border" style="width: 100%; height: 100%;" src="*" alt="Upload image...">
                </div>
                <a style="display: none" role="button" class="btn btn-danger" onclick="removeImage(this)">Delete</a>
            </div>
            <div class="mb-3">
                <label for="image_detail">
                    <strong>Detail image:</strong>
                </label>

                <img src="{{asset('storage/' . $article->img_detail)}}" alt="{{$article->name}}" width="100%">
            </div>
            <p>Update image of precaution required: </p>
            <div class="form-inline mb-4" style="flex-flow: nowrap" >
                <div class="custom-file mr-5" style="width: 50%">
                    <input type="file" class="custom-file-input" accept="image/*" name="img_precaution" onchange="loadImage(this)">
                    <label class="custom-file-label" style="justify-content: flex-start" for="customFile">Choose file</label>
                </div>
                <div style="width: 50%" class="mr-2">
                    <img id="imagePrecaution" class="img-fluid mx-auto rounded border" style="width: 100%; height: 100%;" src="*" alt="Upload image...">
                </div>
                <a style="display: none" role="button" class="btn btn-danger" onclick="removeImage(this)">Delete</a>
            </div>
            <div class="mb-3">
                <label for="image_precaution">
                    <strong>Precautions image:</strong>
                </label>
                <img src="{{asset('storage/' . $article->img_precaution)}}" alt="{{$article->name}}" width="100%">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script>
        function loadImage(input) {
            const parent = $(input).parent()
            let id = "#" + parent.next().children("img")[0].id
            if (input.files && input.files[0]) {

                let reader = new FileReader();

                reader.onload = function (e) {
                    $(id)
                        .attr('src', e.target.result)
                }
                reader.readAsDataURL(input.files[0])
            }
            parent.siblings("a")[0].style.display = "inline-block"
        }

        function removeImage(input) {
            $(input).css("display", "none")

            // Get input and image inside div tag
            const siblings = $(input).siblings("div")

            const inputFile = siblings[0].children[0]

            // Reset value input file and label
            inputFile.value = ""
            const label = inputFile.nextElementSibling
            label.classList.remove("selected")
            label.innerHTML = "Choose file"

            // Delete image preview
            const image = "#" + siblings[1].children[0].id

            $(image).removeAttr('src')
        }
    </script>

@endsection
