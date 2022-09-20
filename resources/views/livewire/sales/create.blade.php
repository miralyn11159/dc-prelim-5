<div>
    <div class="card">
     <div class="card-header bg-info">
         <h3>Add New Sale</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='name'>
             <label for="name">Event name</label>
             @error('name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='amount'>
             <label for="amount">Amount</label>
             @error('amount')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>


         <div class="form-floating mb-3">
            <select name="type" class="form-select" wire:model.defer='type'>
             <option hidden="true">Select type</option>
             <option selected disabled>Select type</option>
             <option value="weekly">weekly</option>
             <option value="monthly">monthly</option>
             <option value="yearly">yearly</option>
            </select>
         </div>

          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-primary" type="submit" wire:click='addSale()'>
                 Add New Sale
             </button>
          </div>
     </div>
    </div>
 </div>
