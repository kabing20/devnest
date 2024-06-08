<div class="form-group">
    <label>Module :</label>
    <input type="text" name="module" placeholder="Enter Module" value="{{ old('module') ?? $row->module ?? '' }}"
           class="form-control{{ ($errors->has('module'))?' form-error':'' }}">
    @if($errors->has('module'))
        <div class="form-error-message">{{ $errors->first('module') }}</div>
    @endif
</div>

<div class="form-group">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Column</th>
            <th>Type</th>
            <th>unique</th>
            <th>nullable</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <input type="text" class="form-control" name="data[0][column]">
            </td>
            <td>
                <select name="data[0][type]" class="form-control">
                    <option value="string">String</option>
                    <option value="longText">Long Text</option>
                    <option value="unsignedBigInteger">Integer</option>
                    <option value="boolean">Boolean</option>
                    <option value="enum">Enum</option>
                </select>
            </td>
            <td>
                <input type="radio" name="data[0][unique]" value="1"> Yes
                <input type="radio" name="data[0][unique]" checked value="0"> No
            </td>
            <td>
                <input type="radio" name="data[0][nullable]" value="1"> Yes
                <input type="radio" name="data[0][nullable]" checked value="0"> No
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" class="form-control" name="data[1][column]">
            </td>
            <td>
                <select name="data[1][type]" class="form-control">
                    <option value="string">String</option>
                    <option value="longText">Long Text</option>
                    <option value="unsignedBigInteger">Integer</option>
                    <option value="boolean">Boolean</option>
                    <option value="enum">Enum</option>
                </select>
            </td>
            <td>
                <input type="radio" name="data[1][unique]" value="1"> Yes
                <input type="radio" name="data[1][unique]" checked value="0"> No
            </td>
            <td>
                <input type="radio" name="data[1][nullable]" value="1"> Yes
                <input type="radio" name="data[1][nullable]" checked value="0"> No
            </td>
        </tr>
        </tbody>
    </table>
</div>
