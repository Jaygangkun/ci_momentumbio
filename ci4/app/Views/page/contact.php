<div class="page-content">
    <div class="container-lg bg-gray">
        <div class="contact-page-form-wrap">
            <h1 class="">Contact</h1>
            <div class="contact-wrap">
                <div class="contact-wrap-left">
                    <div class="map-img-wrap" style="background-image:url(<?= base_url('/assets/img/momentum_map.png')?>)">
                    </div>
                </div>
                <div class="contact-wrap-right">
                    <div class="contact-form">
                        <div class="mt-20 form-input-row">
                            <div class="form-input form-input-col-first-name">
                                <input type="text" id="first_name" placeholder="First name">
                            </div>
                            <div class="form-input form-input-col-last-name">
                                <input type="text" id="last_name" placeholder="Last name">
                            </div>
                            <div class="form-input form-input-col-email">
                                <input type="text" id="email" placeholder="Email">
                            </div>
                            <div class="form-input form-input-col-company">
                                <input type="text" id="company" placeholder="Company Name">
                            </div>
                            <div class="form-input form-input-col-interest-area">
                                <select id="interest_area">
                                    <option value="">Interest area</option>
                                    <option value="Affinity-Selection Mass Spectrometry (ASMS)">Affinity-Selection Mass Spectrometry (ASMS)</option>
                                    <option value="Covalent Binding Assay">Covalent Binding Assay</option>
                                    <option value="Inductively Coupled Plasma Mass Spectrometry (ICP-MS)">Inductively Coupled Plasma Mass Spectrometry (ICP-MS)</option>
                                    <option value="Analyte/Biomarker Quantification and Potency Assays">Analyte/Biomarker Quantification and Potency Assays</option>
                                    <option value="RapidFire-MS High Throughput Functional Assays">RapidFire-MS High Throughput Functional Assays</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-input form-input-col-additional">
                                <textarea id="additional" style="resize: none" placeholder="Additional Information About Your Project"></textarea>
                            </div>
                            <button class="mt-20 btn-contact-submit" id="btn_submit">submit</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('/assets/js/pages/contact.js')?>"></script>