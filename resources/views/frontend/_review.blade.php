<!-- Book A Table Section -->
<section id="review" class="review section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Send Review</h2>
        <p><span>Write Your</span> <span class="description-title">Review<br></span></p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('review.attempt') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="code" class="form-label">Code Transaction</label>
                            <input type="text" name="code" id="code" placeholder="Code Transaction"
                                class="form-control @error('code') is-invalid @enderror" value="{{ old('code') }}">

                            @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="rate" class="form-label">Rating (1-5)</label>
                            <select name="rate" id="rate" class="form-select @error('rate') is-invalid @enderror"
                                value="{{ old('rate') }}">
                                <option value="" hidden>== Select Rating ==</option>
                                 <option value="1">&#9733;</option>
                                 <option value="2">&#9733;&#9733;</option>
                                 <option value="3">&#9733;&#9733;&#9733;</option>
                                 <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                                 <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                            </select>

                            @error('rate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea name="comment" id="comment" cols="5" rows="5" placeholder="Write your comment here"
                                class="form-control"></textarea>
                        </div>

                        <div class="float-end">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

</section><!-- /Book A Table Section -->