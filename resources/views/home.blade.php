<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>

    <!-- logo -->
    <div class="text-center my-3">
        <img src="{{ asset('assets/images/logo.jpg') }}" alt="logo" class="img-fluid">
    </div>

    <h3 class="text-center text-secondary mb-5">
        Fill the form below to generate <br><span class="text-info">Math Exercises</span>.
    </h3>

    <!-- form -->
    <form action="{{ route('generateExercises') }}" method="post">

        @csrf

        <div class="container border border-primary rounded-3 p-5">

            <div class="row gap-5">

                <!-- 4 checkboxes -->
                <div class="col">

                    <p class="text-info">Operations</p>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="check_sum" name="check_sum" checked>
                        <label class="form-check-label" for="check_sum">Addition</label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="check_subtraction" name="check_subtraction"
                            checked>
                        <label class="form-check-label" for="check_subtraction">Subtraction</label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="check_multiplication"
                            name="check_multiplication" checked>
                        <label class="form-check-label" for="check_multiplication">Multiplication</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check_division" name="check_division"
                            checked>
                        <label class="form-check-label" for="check_division">Division</label>
                    </div>

                </div>

                <!-- Range  -->
                <div class="col">

                    <p class="text-info">Products</p>

                    <div class="mb-3">
                        <label for="number_one">Min:</label>
                        <input type="number" class="form-control" id="number_one" name="number_one" min="0"
                            max="999" value="0">
                    </div>

                    <div>
                        <label for="number_two">Max:</label>
                        <input type="number" class="form-control" id="number_two" name="number_two" min="0"
                            max="999" value="100">
                    </div>

                </div>

                <!-- No. of Exercises & Submit -->
                <div class="col">

                    <p class="text-info">Number of Exercises</p>

                    <div class="mb-3">
                        <label for="number_exercises">Number</label>
                        <input type="number" class="form-control" id="number_exercises" name="number_exercises"
                            min="5" max="50" value="10">
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Generate Exercises</button>
                    </div>

                </div>

            </div>

        </div>

    </form>

    {{-- validation error --}}
    @if($errors->any())
        <div class="container">
            <div class="row">
                <div class="alert alert-danger text-center mt-3">
                    Please select at least one operation. Products must be numbers between 0 and 999. Number of exercises must be numbers between 5 and 50.
                </div>
            </div>
        </div>
    @endif

    <!-- footer -->
    <footer class="text-center mt-5">
        <p class="text-secondary">MathX &copy; <span class="text-info">{{ date('Y') }}</span></p>
    </footer>

    <!-- bootstrap -->
    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
