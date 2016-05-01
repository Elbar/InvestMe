    <div class="well follow-well">
            <div class="container text-center">
                <h3>Comment</h3>

                <form action="{{ url('comment',$pr->id) }}" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Comment</label>
                        <div class="col-sm-10">
                            <textarea  class="form-control" id="email" placeholder="Enter your Comment" name="text"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enter</button>
                    <hr>
                    {!! Form::token() !!}
                </form>
            </div><!-- end Container-->

        </div><!-- end well-->