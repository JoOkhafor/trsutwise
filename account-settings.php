<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->
<?php include 'page_components/head.php' ?>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="sidebar-enabled">
<?php include 'page_components/dark_mode.php' ?>
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<?php include 'page_components/aside.php' ?>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<?php include 'page_components/header.php' ?>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
							<!--begin::Navbar-->
							<?php include 'page_components/my-account-top.php' ?>
							<!--end::Navbar-->
							<!--begin::details View-->
							<div class="card mb-5 mb-xl-10">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
									<!--begin::Card title-->
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Mes informations</h3>
									</div>
									<!--end::Card title-->
								</div>
								<!--begin::Card header-->
								<!--begin::Content-->
								<div id="kt_account_settings_profile_details" class="collapse show">
									<!--begin::Form-->
									<form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
										<!--begin::Card body-->
										<div class="card-body border-top p-9">
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Image input-->
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
														<!--begin::Preview existing avatar-->
														<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
														<!--end::Preview existing avatar-->
														<!--begin::Label-->
														<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-kt-initialized="1">
															<i class="bi bi-pencil-fill fs-7"></i>
															<!--begin::Inputs-->
															<input type="file" name="avatar" accept=".png, .jpg, .jpeg">
															<input type="hidden" name="avatar_remove">
															<!--end::Inputs-->
														</label>
														<!--end::Label-->
														<!--begin::Cancel-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-kt-initialized="1">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Cancel-->
														<!--begin::Remove-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-kt-initialized="1">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Remove-->
													</div>
													<!--end::Image input-->
													<!--begin::Hint-->
													<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
													<!--end::Hint-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
										
											<!--end::Input group-->
											
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">
													<span class="required">Téléphone</span>
												</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="044 3276 454 935">
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Company Site</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="keenthemes.com">
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">
													<span class="required">Country</span>
												</label>
												<!--end::Label-->
												
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Language</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<!--begin::Input-->
													<select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid form-select-lg select2-hidden-accessible" data-select2-id="select2-data-10-l9g9" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
														<option value="" data-select2-id="select2-data-12-zafz">Select a Language...</option>
														<option data-kt-flag="flags/indonesia.svg" value="id">Bahasa Indonesia - Indonesian</option>
														<option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu - Malay</option>
														<option data-kt-flag="flags/canada.svg" value="ca">Català - Catalan</option>
														<option data-kt-flag="flags/czech-republic.svg" value="cs">Čeština - Czech</option>
														<option data-kt-flag="flags/netherlands.svg" value="da">Dansk - Danish</option>
														<option data-kt-flag="flags/germany.svg" value="de">Deutsch - German</option>
														<option data-kt-flag="flags/united-kingdom.svg" value="en">English</option>
														<option data-kt-flag="flags/united-kingdom.svg" value="en-gb">English UK - British English</option>
														<option data-kt-flag="flags/spain.svg" value="es">Español - Spanish</option>
														<option data-kt-flag="flags/philippines.svg" value="fil">Filipino</option>
														<option data-kt-flag="flags/france.svg" value="fr">Français - French</option>
														<option data-kt-flag="flags/gabon.svg" value="ga">Gaeilge - Irish (beta)</option>
														<option data-kt-flag="flags/greenland.svg" value="gl">Galego - Galician (beta)</option>
														<option data-kt-flag="flags/croatia.svg" value="hr">Hrvatski - Croatian</option>
														<option data-kt-flag="flags/italy.svg" value="it">Italiano - Italian</option>
														<option data-kt-flag="flags/hungary.svg" value="hu">Magyar - Hungarian</option>
														<option data-kt-flag="flags/netherlands.svg" value="nl">Nederlands - Dutch</option>
														<option data-kt-flag="flags/norway.svg" value="no">Norsk - Norwegian</option>
														<option data-kt-flag="flags/poland.svg" value="pl">Polski - Polish</option>
														<option data-kt-flag="flags/portugal.svg" value="pt">Português - Portuguese</option>
														<option data-kt-flag="flags/romania.svg" value="ro">Română - Romanian</option>
														<option data-kt-flag="flags/slovakia.svg" value="sk">Slovenčina - Slovak</option>
														<option data-kt-flag="flags/finland.svg" value="fi">Suomi - Finnish</option>
														<option data-kt-flag="flags/el-salvador.svg" value="sv">Svenska - Swedish</option>
														<option data-kt-flag="flags/virgin-islands.svg" value="vi">Tiếng Việt - Vietnamese</option>
														<option data-kt-flag="flags/turkey.svg" value="tr">Türkçe - Turkish</option>
														<option data-kt-flag="flags/greece.svg" value="el">Ελληνικά - Greek</option>
														<option data-kt-flag="flags/bulgaria.svg" value="bg">Български език - Bulgarian</option>
														<option data-kt-flag="flags/russia.svg" value="ru">Русский - Russian</option>
														<option data-kt-flag="flags/suriname.svg" value="sr">Српски - Serbian</option>
														<option data-kt-flag="flags/ukraine.svg" value="uk">Українська мова - Ukrainian</option>
														<option data-kt-flag="flags/israel.svg" value="he">עִבְרִית - Hebrew</option>
														<option data-kt-flag="flags/pakistan.svg" value="ur">اردو - Urdu (beta)</option>
														<option data-kt-flag="flags/argentina.svg" value="ar">العربية - Arabic</option>
														<option data-kt-flag="flags/argentina.svg" value="fa">فارسی - Persian</option>
														<option data-kt-flag="flags/mauritania.svg" value="mr">मराठी - Marathi</option>
														<option data-kt-flag="flags/india.svg" value="hi">हिन्दी - Hindi</option>
														<option data-kt-flag="flags/bangladesh.svg" value="bn">বাংলা - Bangla</option>
														<option data-kt-flag="flags/guam.svg" value="gu">ગુજરાતી - Gujarati</option>
														<option data-kt-flag="flags/india.svg" value="ta">தமிழ் - Tamil</option>
														<option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="kn">ಕನ್ನಡ - Kannada</option>
														<option data-kt-flag="flags/thailand.svg" value="th">ภาษาไทย - Thai</option>
														<option data-kt-flag="flags/south-korea.svg" value="ko">한국어 - Korean</option>
														<option data-kt-flag="flags/japan.svg" value="ja">日本語 - Japanese</option>
														<option data-kt-flag="flags/china.svg" value="zh-cn">简体中文 - Simplified Chinese</option>
														<option data-kt-flag="flags/taiwan.svg" value="zh-tw">繁體中文 - Traditional Chinese</option>
													</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-y639" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-lg" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-language-2b-container" aria-controls="select2-language-2b-container"><span class="select2-selection__rendered" id="select2-language-2b-container" role="textbox" aria-readonly="true" title="Select a language..."><span class="select2-selection__placeholder">Select a language...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													<!--end::Input-->
													<!--begin::Hint-->
													<div class="form-text">Please select a preferred language, including date, time, and number formatting.</div>
													<!--end::Hint-->
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											
										</div>
										<!--end::Card body-->
										<!--begin::Actions-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<button type="reset" class="btn btn-light btn-active-light-primary me-2">Annuler</button>
											<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Enregistrer</button>
										</div>
										<!--end::Actions-->
									<input type="hidden"><div></div></form>
									<!--end::Form-->
								</div>
								<!--end::Content-->
							</div>

                            <div class="card mb-5 mb-xl-10">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Paramètres de connection</h3>
									</div>
								</div>
								<!--end::Card header-->
								<!--begin::Content-->
								<div id="kt_account_settings_signin_method" class="collapse show">
									<!--begin::Card body-->
									<div class="card-body border-top p-9">
										<!--begin::Email Address-->
										<div class="d-flex flex-wrap align-items-center">
											<!--begin::Label-->
											<div id="kt_signin_email">
												<div class="fs-6 fw-bold mb-1">Adresse mail</div>
												<div class="fw-semibold text-gray-600">johndoet@gmail.com</div>
											</div>
											<!--end::Label-->
											<!--begin::Edit-->
											<div id="kt_signin_email_edit" class="flex-row-fluid d-none">
												<!--begin::Form-->
												<form id="kt_signin_change_email" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
													<div class="row mb-6">
														<div class="col-lg-6 mb-4 mb-lg-0">
															<div class="fv-row mb-0 fv-plugins-icon-container">
																<label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Entrez une nouvelle adresse mail</label>
																<input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="support@keenthemes.com">
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
														</div>
														<div class="col-lg-6">
															<div class="fv-row mb-0 fv-plugins-icon-container">
																<label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirmez votre mot de pass</label>
																<input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword">
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
														</div>
													</div>
													<div class="d-flex">
														<button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Mettez à jour</button>
														<button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Annuler</button>
													</div>
												<div></div></form>
												<!--end::Form-->
											</div>
											<!--end::Edit-->
											<!--begin::Action-->
											<div id="kt_signin_email_button" class="ms-auto">
												<button class="btn btn-light btn-active-light-primary">Mettre à jour l'Email</button>
											</div>
											<!--end::Action-->
										</div>
										<!--end::Email Address-->
										<!--begin::Separator-->
										<div class="separator separator-dashed my-6"></div>
										<!--end::Separator-->
										<!--begin::Password-->
										<div class="d-flex flex-wrap align-items-center mb-10">
											<!--begin::Label-->
											<div id="kt_signin_password">
												<div class="fs-6 fw-bold mb-1">Mot de pass</div>
												<div class="fw-semibold text-gray-600">************</div>
											</div>
											<!--end::Label-->
											<!--begin::Edit-->
											<div id="kt_signin_password_edit" class="flex-row-fluid d-none">
												<!--begin::Form-->
												<form id="kt_signin_change_password" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
													<div class="row mb-1">
														<div class="col-lg-4">
															<div class="fv-row mb-0 fv-plugins-icon-container">
																<label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Mot de pass actuel</label>
																<input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword">
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
														</div>
														<div class="col-lg-4">
															<div class="fv-row mb-0 fv-plugins-icon-container">
																<label for="newpassword" class="form-label fs-6 fw-bold mb-3">Nouveau mot de pass</label>
																<input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword">
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
														</div>
														<div class="col-lg-4">
															<div class="fv-row mb-0 fv-plugins-icon-container">
																<label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirmer le mot de pass</label>
																<input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword">
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
														</div>
													</div>
													<div class="form-text mb-5">Au moins 8 caractètres</div>
													<div class="d-flex">
														<button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Mettre à jour</button>
														<button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Annuler</button>
													</div>
												<div></div></form>
												<!--end::Form-->
											</div>
											<!--end::Edit-->
											<!--begin::Action-->
											<div id="kt_signin_password_button" class="ms-auto">
												<button class="btn btn-light btn-active-light-primary">Mettre à jour le mot de pass</button>
											</div>
											<!--end::Action-->
										</div>
										<!--end::Password-->
										 
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Content-->
							</div>
							
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					<!--end::Content-->
				<?php include 'page_components/footer.php' ?>
			</div>
			<!--end::Wrapper-->

		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->

	</div>>
		

		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
						fill="currentColor" />
					<path
						d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
						fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->

		<?php include 'page_components/scripts.php' ?>
</body>
<!--end::Body-->

</html>