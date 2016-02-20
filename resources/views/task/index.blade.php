@extends('layouts.app')

@section('content')

        <!-- Bootstrap Boilerplate... -->

<div class="panel-body">
    <!-- Display Validation Errors -->


            <!-- New Task Form -->
    <form action="/tasks" method="POST" class="form-horizontal">
        {{ csrf_field() }}

                <!-- Task Name -->
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Task</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control">
            </div>
        </div>

        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Task
                </button>
            </div>
        </div>
    </form>
    <div data-ng-controller="Taskcontroller as task">
          <table>

              <tr>
                  <td>nobre</td>

              </tr>
              <tr data-ng-repeat="task in tasks">
                  <td>@{{ task.name }}</td>

              </tr>
          </table>
    </div>
</div>

<!-- TODO: Current Tasks -->
@endsection