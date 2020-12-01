<form>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="select">Select Lvl</label>
                <div>
                  <select id="lvlSelect" name="select" class="custom-select" wire:model='lvl'>
                    <option value="">Seleccione Lvl</option>
                      @foreach ($lvls as $item)
                      <option value="{{ $item }}">{{ $item }}</option>
                      @endforeach
                  </select>
                </div>
              </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="select">Select</label>
                <div>
                  <select id="digiSelect" name="select" class="custom-select" wire:model='digimon'>
                    @foreach ($digimons as $item)
                        <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
        </div>
    </div>
    <div>
        <div wire:loading.delay>
            Loading content...
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#lvlSelect').select2();
        });
    </script>
</form>
