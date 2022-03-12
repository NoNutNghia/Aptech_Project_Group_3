@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>CREATE ARTICLE VIRUS FORM</h2>
        <p>You must fill out all input about the article below:</p>
        <form action="{{route('articles.store')}}" class="was-validated" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Name of virus" name="name" required>
            </div>
            <div class="form-inline justify-content-between mb-4" >
                <label for="year_originated">Year originated:</label>
                <input type="number" class="form-control " style="width: 100px" max="2022" id="year_originated" name="year_originated" required>
                <label for="number_of_infections">Number of Infections (At this time):</label>
                <input type="number" class="form-control" id="number_of_infections" name="number_of_infections" required>
                <label for="number_of_death">Number of Death (At this time):</label>
                <input type="number" class="form-control" id="number_of_death" name="number_of_death" required>
            </div>
            <div class="form-inline mb-4">
                <label for="virus_type" class="mr-4">Choice type of virus: </label>
                <select name="virus_type" class="custom-select col-3">
                    @foreach($typeViruses as $typeVirus)
                        <option value="{{$typeVirus->id}}">{{$typeVirus->type_virus}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-inline mb-4">
                <label for="new_virus_type" class="mr-3">Or input type of virus here:</label>
                <input type="text" class="form-control col-3 mr-4" id="new_virus_type" name="new_virus_type">
            </div>
            <div class="form-group">
                <label for="location_of_origin">Location of origin:</label>
                <input type="text" class="form-control" id="location_of_origin" placeholder="Location of origin" name="location_of_origin" required>
            </div>
            <p>Upload image of virus: </p>
            <div class="form-inline mb-4" style="flex-flow: nowrap">
                <div class="custom-file mr-5" style="width: 50%">
                    <input type="file" class="custom-file-input" accept="image/*" name="img" onchange="loadImage(this)" required>
                    <label class="custom-file-label" style="justify-content: flex-start" for="customFile">Choose file</label>
                </div>
                <div style="width: 50%">
                    <img id="imagePresent" class="img-fluid mx-auto rounded border" style="width: 100%; height: 100%;" src="*" alt="Upload image...">
                </div>
                <a style="display: none" role="button" class="btn btn-danger ml-2" onclick="removeImage(this)">Delete</a>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" rows="7" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="spread">Way to spread:</label>
                <textarea class="form-control" rows="7" id="spread" name="spread" required></textarea>
            </div>

            <div class="form-group">
                <label for="detail_description">Detail Description:</label>
                <textarea class="form-control" rows="7" id="detail_description" name="detail_description" required></textarea>
            </div>
            <p>Upload image detail about damage caused by virus: </p>
            <div class="form-inline mb-4" style="flex-flow: nowrap">
                <div class="custom-file mr-5" style="width: 50%">
                    <input type="file" class="custom-file-input" accept="image/*" name="img_detail" onchange="loadImage(this)" required>
                    <label class="custom-file-label" style="justify-content: flex-start" for="customFile">Choose file</label>
                </div>
                <div style="width: 50%">
                    <img id="imageDetail" class="img-fluid mx-auto rounded border" style="width: 100%; height: 100%;" src="*" alt="Upload image...">
                </div>
                <a style="display: none" role="button" class="btn btn-danger ml-2" onclick="removeImage(this)">Delete</a>
            </div>
            <div class="form-group">
                <label for="precaution_required">Precaution required:</label>
                <textarea class="form-control" rows="7" id="precaution_required" name="precaution_required" required></textarea>
            </div>
            <p>Upload image of precaution required: </p>
            <div class="form-inline mb-4" style="flex-flow: nowrap">
                <div class="custom-file mr-5" style="width: 50%">
                    <input type="file" class="custom-file-input" accept="image/*" name="img_precaution" onchange="loadImage(this)" required>
                    <label class="custom-file-label" style="justify-content: flex-start" for="customFile">Choose file</label>
                </div>
                <div style="width: 50%">
                    <img id="imagePrecaution" class="img-fluid mx-auto rounded border" style="width: 100%; height: 100%;" src="*" alt="Upload image...">
                </div>
                <a style="display: none" role="button" class="btn btn-danger ml-2" onclick="removeImage(this)">Delete</a>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
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
