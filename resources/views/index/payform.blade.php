
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="header-elements text-center">
                        <h5 class="modal-title" id="exampleModalLabel">Find Your Ticket</h5>
                        {{-- <p>Please fill out the information below and the ticket will be made available.</p> --}}
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="p-5" method="post" action="{{ url('/searchName') }}" enctype="multipart/form-data">
                    @csrf
                    <p class="text-center">Search using either of the below methods</p>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Last Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Zip</label>
                                <input type="text" name="zip" class="form-control" id="zip" placeholder="Zip code">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Continue</button>
                    </div>
                </form>


                <form style="margin-top: -100px !important;" class="p-5" method="post" action="{{ url('/searchID') }}" enctype="multipart/form-data">
                    @csrf
                        <p class="text-center">Or</p>
                    <div class="modal-body">
                        <div class="form-group">
                                <label for="letter_id">Your Letter ID</label>
                                <input type="text" id="letter_id" name="letter_id" class="form-control" placeholder="ex 123456789">
                            </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
    // jQuery(document).ready(function($){

    //     function letterMask() {
    //         var num = $(this).val().replace(/\D/g,'');
    //         $(this).val(num.substring(0,9) + '/' + num.substring(9,13));
    //     }

    //     $('#letter_id').keyup(letterMask);

    // });
</script>
