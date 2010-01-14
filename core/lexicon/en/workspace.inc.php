<?php
/**
 * Workspace English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['alphabetically'] = 'Alphabetically';
$_lang['already_downloaded'] = 'You have already downloaded this package.';
$_lang['author'] = 'Author';
$_lang['autoincludes_packaging'] = 'Packaging in autoincludes: [[+autoincludes]]';
$_lang['back_txt'] = 'Back';
$_lang['by'] = 'by';
$_lang['core_err_invalid'] = 'You must have a valid core installation with an active workspace to run the build.';
$_lang['description'] = 'Description';
$_lang['details'] = 'Details';
$_lang['download'] = 'Download';
$_lang['downloaded'] = 'Downloaded';
$_lang['download_extras'] = 'Download Extras';
$_lang['downloads'] = 'Downloads';
$_lang['installation_instructions'] = 'Installation Instructions';
$_lang['installed'] = 'Installed';
$_lang['last_updated'] = 'Last Updated';
$_lang['lexicon_autobuilding'] = 'Auto-building in lexicon from path: [[+path]]';
$_lang['lexicon_err_path_nf'] = '<b>Error</b> - Lexicon path not found: [[+path]]';
$_lang['license'] = 'License';
$_lang['license_agree'] = 'I Agree';
$_lang['license_agreement'] = 'License Agreement';
$_lang['license_agreement_desc'] = 'Please review the license agreement for this package.';
$_lang['license_disagree'] = 'I Disagree';
$_lang['more_info'] = 'More Info';
$_lang['most_downloads'] = 'Most Downloads';
$_lang['most_popular'] = 'Most Popular';
$_lang['name'] = 'Name';
$_lang['namespace_packaged'] = 'Packaged namespace "[[+namespace]]" into package.';
$_lang['namespace_registered'] = 'Registered package namespace as: [[+namespace]]';
$_lang['newest_added'] = 'Newest Added';
$_lang['newest_additions'] = 'Newest Additions';
$_lang['not_installed'] = 'Not Installed';
$_lang['package'] = 'Package';
$_lang['package_add'] = 'Add New Package';
$_lang['package_check_for_updates'] = 'Check For Updates';
$_lang['package_confirm_install'] = 'Are you sure you want to install this package?';
$_lang['package_confirm_remove'] = 'Are you sure you want to delete this package?';
$_lang['package_confirm_uninstall'] = 'Are you sure you want to uninstall this package?';
$_lang['package_created'] = 'Created new transport package with signature: [[+signature]]';
$_lang['package_download_err'] = 'Could not download package at: [[+location]]';
$_lang['package_download_err_create'] = 'Could not download and create transport package with signature: [[+signature]]';
$_lang['package_download_err_ns'] = 'Please select at least one package version to download.';
$_lang['package_err_create'] = 'Could not create the package.';
$_lang['package_err_file_read'] = 'Could not open file for reading: [[+source]]';
$_lang['package_err_install'] = 'Could not install package with signature: [[+signature]]';
$_lang['package_err_install_gen'] = 'Failed to install the package.';
$_lang['package_err_load'] = 'Could not load transport package.';
$_lang['package_err_nf'] = 'Package not found.';
$_lang['package_err_nfs'] = 'Could not retrieve package with signature: [[+signature]].';
$_lang['package_err_ns'] = 'Package not specified.';
$_lang['package_err_remove'] = 'Error removing package with signature: [[+signature]]';
$_lang['package_err_source_nf'] = 'No valid source specified for the package.';
$_lang['package_err_spa'] = 'You must create a package with createPackage() before you can call setPackageAttributes()';
$_lang['package_err_target_write'] = 'Target directory is either not a directory or writable: [[+targetDir]]';
$_lang['package_err_transfer'] = 'Could not transfer package [[+sourceFile]] to [[+packageDir]].';
$_lang['package_err_transfer_fopen'] = 'Could not transfer package [[+sourceFile]] to [[+packageDir]]; allow_url_fopen is not enabled on your configuration.';
$_lang['package_err_uninstall'] = 'Error uninstalling package with signature: [[+signature]]';
$_lang['package_err_uptodate'] = 'Your package is already up-to-date at: [[+signature]]';
$_lang['package_information'] = 'Package Information';
$_lang['package_install'] = 'Install Package';
$_lang['package_install_info_start'] = 'Attempting to install package with signature: [[+signature]]';
$_lang['package_install_info_found'] = 'Package found...now preparing to install.';
$_lang['package_install_info_success'] = 'Successfully installed package [[+signature]]';
$_lang['package_installing'] = 'Workspace environment initiated, now installing package...';
$_lang['package_management'] = 'Package Management';
$_lang['package_obtain_method'] = 'First, select how you would like to obtain the package:';
$_lang['package_remove'] = 'Remove Package';
$_lang['package_remove_confirm'] = 'Are you sure you want to remove this package? This is permanent.';
$_lang['package_remove_err_tdir'] = 'Transport directory was unable to be removed, check your permissions.';
$_lang['package_remove_err_tdir_nf'] = 'Transport directory was not found and could not be removed from the core/packages directory.';
$_lang['package_remove_err_tzip'] = 'Transport zip was unable to be removed, check your permissions.';
$_lang['package_remove_err_tzip_nf'] = 'Transport zip was not found and could not be removed from the core/packages directory.';
$_lang['package_remove_force'] = 'Force Package Removal';
$_lang['package_remove_force_desc'] = 'By selecting force, you state that you want the transport package to be removed regardless of whether or not the package is successfully uninstalled.';
$_lang['package_remove_info_gpack'] = 'Grabbing package to remove...';
$_lang['package_remove_info_success'] = 'Package successfully removed.';
$_lang['package_remove_info_tdir'] = 'Successfully removed extracted transport directory.';
$_lang['package_remove_info_tdir_start'] = 'Attempting to remove extracted transport directory...';
$_lang['package_remove_info_tzip'] = 'Successfully removed transport zip.';
$_lang['package_remove_info_tzip_start'] = 'Successfully grabbed package. Now attempting to remove transport zip...';
$_lang['package_reinstall'] = 'Reinstall Package';
$_lang['package_reinstall_confirm'] = 'Are you sure you want to reinstall the package? This will remove any changes you have made.';
$_lang['package_retriever'] = 'Package Retriever';
$_lang['package_search_local_title'] = 'Search Locally for Packages';
$_lang['package_search_local_confirm'] = 'MODx will now search your core/packages directory for any valid packages, and then add them in. <br /><br />Please note that it will NOT install them, but simply add them into your workspace. <br /><br />Please make sure before proceeding that you have uploaded the packages into the core/packages directory.';
$_lang['package_select_download'] = 'Select Packages to Download';
$_lang['package_select_download_desc'] = 'Now select which packages to download. Ctrl+click to select more than one package.';
$_lang['package_select_download_ns'] = 'Please select at least one package to download.';
$_lang['package_signature'] = 'Signature';
$_lang['package_state'] = 'State';
$_lang['package_uninstall'] = 'Uninstall Package';
$_lang['package_uninstall_info_find'] = 'Finding package with signature: [[+signature]]';
$_lang['package_uninstall_info_prep'] = 'Package found. Preparing to uninstall.';
$_lang['package_uninstall_info_success'] = 'Package successfully uninstalled with signature: [[+signature]]';
$_lang['package_update'] = 'Update Package';
$_lang['package_update_err_provider_empty'] = 'No packages found in the specified provider.';
$_lang['package_update_err_provider_nf'] = 'This package cannot be updated, because it was not installed from a provider.';
$_lang['package_update_info_diff'] = 'Found package. Checking for version difference.';
$_lang['package_update_info_provider_scan'] = 'Scanning for package updates from provider: [[+provider]]';
$_lang['package_update_to_version'] = 'Please select the version to update this package to: ';
$_lang['package_version_remove'] = 'Remove Package Version';
$_lang['package_version_remove_confirm'] = 'Are you sure you want to attempt to remove the database record and transport files for this older version? Doing so will prevent you from rolling back changes to this version.';
$_lang['package_view'] = 'View Package';
$_lang['packages'] = 'Packages';
$_lang['packages_browse_msg'] = 'Click details on a package to get more information. Click Download to download the package to your MODx Revolution install.';
$_lang['packages_desc'] = 'Packages are collections of MODx components that can be used within MODx in a variety of ways. Here you can manage them, update their installation status, disable or enable installed packages, or download new ones from remote providers. Right-click on a row in the grid for more options.';
$_lang['preexisting_mode_preserve'] = 'Preserve';
$_lang['preexisting_mode_preserve_desc'] = 'This will uninstall the newer version, keeping the prior, but also will keep any new settings or values for the component.';
$_lang['preexisting_mode_remove'] = 'Remove';
$_lang['preexisting_mode_remove_desc'] = 'This will completely uninstall the package and any prior versions.';
$_lang['preexisting_mode_restore'] = 'Restore';
$_lang['preexisting_mode_restore_desc'] = 'This will restore the prior version\'s settings as they were before the newer version was installed.';
$_lang['preexisting_mode_select'] = 'Please select an uninstall mode: ';
$_lang['prior_versions'] = 'Prior Versions';
$_lang['provider'] = 'Provider';
$_lang['provider_add'] = 'Add New Provider';
$_lang['provider_add_or'] = 'Or add a new provider...';
$_lang['provider_confirm_remove'] = 'Are you sure you want to remove this provider?';
$_lang['provider_err_connect'] = 'An error occurred while connecting to the provider.';
$_lang['provider_err_no_client'] = 'You do not have a viable REST client for your system. Please install cURL or enable fsockopen.';
$_lang['provider_err_nfs'] = 'Provider not found with ID [[+id]]';
$_lang['provider_err_no_response'] = 'Error in getting a response from the server: [[+provider]]';
$_lang['provider_err_ns'] = 'Provider not specified.';
$_lang['provider_err_ns_name'] = 'Please specify a name for the provider.';
$_lang['provider_err_ns_url'] = 'Please provide a valid URL for the provider.';
$_lang['provider_err_remove'] = 'An error occurred while trying to remove the provider.';
$_lang['provider_err_save'] = 'An error occurred while trying to save the provider.';
$_lang['provider_home_msg'] = 'Choose a repository from the left to begin browsing this provider.';
$_lang['provider_home_title'] = 'Download Extras';
$_lang['provider_remove'] = 'Remove Provider';
$_lang['provider_select'] = 'Select a Provider';
$_lang['provider_select_desc'] = 'Please select the provider from which you will retrieve packages.';
$_lang['provider_total_downloads'] = 'Total Downloads for this Provider';
$_lang['provider_total_packages'] = 'Total Packages in this Provider';
$_lang['provider_update'] = 'Update Provider';
$_lang['provider_url'] = 'Service URL';
$_lang['providers'] = 'Providers';
$_lang['providers_desc'] = 'Providers are repositories for MODx component packages. They are remote URLs that contain lists of MODx packages that you can download and install components from.';
$_lang['provisioner'] = 'Provisioner';
$_lang['provisioners'] = 'Provisioners';
$_lang['readme'] = 'Readme';
$_lang['readme_desc'] = 'Please review the README for this package.';
$_lang['released'] = 'Released';
$_lang['released_on'] = 'Released On';
$_lang['setup_options'] = 'Setup Options';
$_lang['setup_options_desc'] = 'Please choose the appropriate options (if applicable) and click Finish to install the package.';
$_lang['signature'] = 'Signature';
$_lang['sort_by_dots'] = 'Sort By...';
$_lang['supports'] = 'Supports';
$_lang['top_rated'] = 'Top Rated';
$_lang['transport_package_create'] = 'Create new package';
$_lang['transport_package_install'] = 'Install package';
$_lang['transport_package_scan_for_updates'] = 'Check for updates';
$_lang['uninstall'] = 'Uninstall';
$_lang['uploaded_on'] = 'Uploaded On';
$_lang['uploaded_versions'] = 'Uploaded Versions';
$_lang['workspace'] = 'Workspace';
$_lang['workspace_err_nf'] = 'Workspace not found.';
$_lang['workspace_grabbing'] = 'Grabbing package workspace...';
$_lang['workspace_management'] = 'MODx Workspace Management';
$_lang['workspace_scan_for_new'] = 'Search for new packages';
$_lang['workspace_scan_for_updates'] = 'Search for package updates';
$_lang['version'] = 'Version';