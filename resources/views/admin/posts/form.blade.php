<div class="row">
    <div class="form-group col-12">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $post->name) }}" required autofocus>

        <label for="author" class="required">Autor </label>
        <input type="text" name="author" id="author" class="form-control" value="{{ old('author', $post->author) }}" required>

        <label for="category" class="required">Categoria </label>
        <input type="text" name="category" id="category" class="form-control" value="{{ old('category', $post->category) }}" required>

        <label for="text" class="required">Texto </label>
        <textarea name="text" id="text" class="form-control" required>{{ old('text', $post->text) }}</textarea>
    </div>
</div>