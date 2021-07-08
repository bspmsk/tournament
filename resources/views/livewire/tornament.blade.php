<div>
    <label for="teams_qty">Insert teams quantity</label>
    <input id="teams_qty" type="number" wire:model="teams_qty"/>
    <button class="btn btn-primary" wire:click="get_tournament_results">
        Get tournament results
    </button>


    @foreach($group_stage as $division_name => $teams)
        <h2>Division #{{$division}}</h2>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>-:-</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
    @endif
</div>
