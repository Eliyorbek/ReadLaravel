<div>
    <div class="card-header d-flex align-items-center justify-content-end" style="gap:10px; line-height: 20px;">
        <div class="search">
            <form action="">
                <div class="form-group d-flex" style="gap:10px;">
                    <input type="search" wire:model.live="search" name="" id="" style=" padding:6px; outline: none; border-color: blue; height: 30px;margin-top: 14px; border-radius: 5px; width: 500px;" placeholder="Search">
                </div>
            </form>
        </div>
        <button type="button" wire:click="createOpen()" class="btn btn-sm btn-primary">
            Add
        </button>
    </div>
</div>
