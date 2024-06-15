<div class="row g-4">
    <div class="col-lg-12">
        <div class="mb-3">
            <label for="appointment_date" class="form-label">วันที่นัด</label>
            <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
        </div>
        <div class="mb-3">
            <label for="note" class="form-label">คำอธิบายเพิ่มเติม</label>
            <textarea class="form-control" id="note" name="note" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">สถานะการนัดหมาย (ยืนยัน/ยกเลิก)</label>
            <select class="form-select" id="status" name="status" required>
                <option value="" selected>โปรดระบุ ...</option>
                <option value="ยืนยัน">ยืนยัน</option>
                <option value="ยกเลิก">ยกเลิก</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="patient_id" class="form-label">รหัสผู้ป่วย</label>
            <input type="text" class="form-control" id="patient_id" name="patient_id"
                value="{{ Auth::user()->patient->id }}" readonly required>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">บันทึก</button>
        </div>
    </div>
</div>
