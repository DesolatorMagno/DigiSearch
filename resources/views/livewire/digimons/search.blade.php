<form>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="lvlSelect">Select Lvl</label>
                <div name="divLvl" wire:ignore>
                  <select id="lvlSelect" name="lvlSelect" class="custom-select select2" data-name="lvl">
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
                <label for="digiSelect">Select Digimon</label>
                <div>
                  <select id="digiSelect" name="digiSelect" class="custom-select" wire:model='digimon' data-name="digimon">
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
    @push('scripts')
    <script>
        $(document).ready(function() {
            $('#lvlSelect').select2();
            $('#digiSelect').select2();
            $('.select2').on('change', function (e) {
                let data = $(this).select2("val")
                @this.set($(this).data('name'), data);
            });
            Livewire.on('reApplyS2', values  => {
                $('#digiSelect').select2();
            })
        });
    </script>
    @endpush
</form>
