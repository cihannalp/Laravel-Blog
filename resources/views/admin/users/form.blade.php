

                            <div class="form-group">
                                <label class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div style="display: inline;">
							<div style="margin-right: 30px;" class="radio">
							    <label class="col-md-5 control-label"><input type="radio" name="user" value="3">User</label>

							</div>

							<div style="margin-right: 3px;" class="radio">
							  <label class="col-md-5 control-label"><input type="radio" name="user" value="2">Author</label>
							</div>

							<div style="margin-right: 7px;" class="radio">
							  <label class="col-md-5 control-label"><input type="radio" name="user" value="1">Admin</label>
							</div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                   <br> <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                                        {{$submitButton}}
                                    </button>        
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>