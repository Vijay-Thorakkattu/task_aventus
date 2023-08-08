<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <br class="antialiased">
        <head>
            <title>STRING MATCHING</title>
        </head>

        <div class="container">
            <h3>STRING MATCHING</h3>
            <div class="row mt-5">
                <form method="post" action="{{route('check-string')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Master string:</label>
                        <input type="text" class="form-control" name="master_string" id="" aria-describedby="emailHelp" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">string 1:</label>
                        <input type="text" class="form-control" name="input_strings[]" id="" aria-describedby="emailHelp" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">string 2:</label>
                        <input type="text" class="form-control" name="input_strings[]" id="" aria-describedby="emailHelp" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">string 3:</label>
                        <input type="text" class="form-control" name="input_strings[]" id="" aria-describedby="emailHelp" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">string 4:</label>
                        <input type="text" class="form-control" name="input_strings[]" id="" aria-describedby="emailHelp" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>
        </div>

        {{-- @if(isset($output))
        <h4>Output: </h4>
        @foreach($output as $inputStrings => $result)
         
        {{$inputStrings}} - {{$result}}<br>
        @endforeach
        @endif --}}

        @if(isset($output))
        <h4>Output: </h4>
        <table>
            <tr>
                <th>String</th>
                <th>Result</th>
            </tr>
            @foreach($output as $inputString => $result)
                <tr>
                    <td>{{ $inputString }}</td>
                    <td>{{ $result }}</td>
                </tr>
            @endforeach
        </table>
        @endif
    </body>
</html>
