@csrf
<div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Name"
           required maxlength="100" value="{{ old('name') ?? $brand->name ?? '' }}">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="slug" placeholder="Slug"
           required maxlength="100" value="{{ old('slug') ?? $brand->slug ?? '' }}">
</div>
<div class="form-group">
    <textarea class="form-control" name="content" placeholder="Description" maxlength="200"
              rows="3">{{ old('content') ?? $brand->content ?? '' }}</textarea>
</div>
<div class="form-group">
    <input type="file" class="form-control-file" name="image" accept="image/png, image/jpeg">
</div>
@isset($brand->image)
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" name="remove" id="remove">
        <label class="form-check-label" for="remove">
            Delete image
        </label>
    </div>
@endisset
<div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
