<div>
    <div class="card container w-50">
     <div class="card-header bg-info">
         <h3>Update Stall Details</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='name'>
             <label for="name">Stall name</label>
             @error('name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='owner'>
             <label for="owner">owner</label>
             @error('owner')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>


         <div class="form-floating mb-3">
            <select name="product" class="form-select" wire:model.defer='product'>
             <option hidden="true">Select product</option>
             <option selected disabled>Select product</option>
             <option value="Electronic">Electronic</option>
             <option value="Food">Food</option>
             <option value="Medical">Medical</option>
            </select>
         </div>

          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-primary" type="submit" wire:click='editStall()'>
                 Save Changes
             </button>
          </div>
     </div>
    </div>
 </div>
