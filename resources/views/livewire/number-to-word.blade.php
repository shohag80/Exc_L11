<div>
    <div class="container text-center mt-5">
        <h3 class="text-success fw-bold">Number to Word</h3>
        <hr />
        <div class="col-6 offset-3 mb-3 row">
            <div class="col-4 p-1">
                <label for="inputNumber" class="form-label">Let's Set Number -</label>
            </div>
            <div class="col-8">
                <input type="number" class="form-control" wire:model.live="number" id="inputNumber">
            </div>
        </div>
        <p class="text-primary fw-bold mt-2">In Word : {{ $toword }}</p>
    </div>
</div>
