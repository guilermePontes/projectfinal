<div class="container-fluid py-2">
    <div class="row">
        <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-2 ps-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <form class="row g-3" method="post" action="">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <div class="input-group input-group-outline">
                                        <input type="email" class="form-control" name="email" id="inputEmail4" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Password</label>
                                    <div class="input-group input-group-outline">
                                        <input type="password" class="form-control" name="password" id="inputPassword4" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Endereço</label>
                                    <div class="input-group input-group-outline">
                                        <input type="text" class="form-control" name="address" id="inputAddress" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Cidade</label>
                                    <div class="input-group input-group-outline">
                                        <input type="text" class="form-control" name="city" id="inputCity" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Estado</label>
                                    <div class="input-group input-group-outline">
                                        <input type="text" class="form-control" name="state" id="inputState" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCPF" class="form-label">CPF</label>
                                    <div class="input-group input-group-outline">
                                        <input type="text" class="form-control" name="cpf" id="inputCPF" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputTelefone" class="form-label">Telefone</label>
                                    <div class="input-group input-group-outline">
                                        <input type="text" class="form-control" name="phone" id="inputTelefone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputSelect" class="form-label">Profissão</label>
                                    <div class="input-group input-group-outline">
                                        <select id="inputSelect" class="form-select" name="profession" onchange="toggleOABField()">
                                            <option selected>Profissão</option>
                                            <option>Atendente</option>
                                            <option>Advogado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" id="oabField" style="display: none;">
                                    <label for="inputOAB" class="form-label">OAB</label>
                                    <div class="input-group input-group-outline">
                                        <input type="text" class="form-control" name="oab" id="inputOAB">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleOABField() {
        const select = document.getElementById('inputSelect');
        const oabField = document.getElementById('oabField');
        const oabInput = document.getElementById('inputOAB');
        
        if (select.value === 'Advogado') {
            oabField.style.display = 'block'; 
            oabInput.setAttribute('required', 'required');
        } else {
            oabField.style.display = 'none'; 
            oabInput.removeAttribute('required'); 
            oabInput.value = ''; 
        }
    }
</script>
