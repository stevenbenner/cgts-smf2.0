# Celica-GTS.com Forums SMF 2.0

**The SMF 2.0 forum software for the Celica-GTS.com Message Forums.**

This is a copy of the [Simple Machines Forum (SMF)][smf] software which has been
modified for the [Celica-GTS.com Message Forums][celicaforums].

This software is licensed under the [3-Clause BSD License][license].

[smf]: https://www.simplemachines.org/
[celicaforums]: https://www.celica-gts.com/forums/
[license]: license.txt

## Customizations

### Mods

This version of this project incorporates the following mods:

 * **[Stop Spammer][stopspammer]** - Implement [Stop Forum Spam][sfs] service.
 * **[httpBL][httpbl]** - Implement the [Project Honey Pot][honey] service.

[stopspammer]: https://custom.simplemachines.org/index.php?mod=1547
[httpbl]: https://custom.simplemachines.org/index.php?mod=2155
[sfs]: https://www.stopforumspam.com/
[honey]: https://www.projecthoneypot.org/

### Theme

The live version of this project uses the following theme:

 * **[Minimalistic Theme][theme]** - A good little theme with a bad little
		license. The version deployed has various tweaks and modifications, but due
		to the license I cannot publish the source code of my modified version.

[theme]: https://custom.simplemachines.org/index.php?theme=2561

### Other changes

There are other changes that I have made to the base forum software. You can
review the git history to see those changes.

Note that this git repository was created by importing the forum software after
it had already been running for nearly 20 years. Many changes and previous
versions prior to 2022 are not included because they were since replaced. Also
the dates on the commits may not match the dates when the changes were deployed.

## Backup targets

To perform a backup, you need to export the following from the live servers:

 * **Database** - Export the full database.
 * **/attachments** - Copy the contents of the attachments directory.
 * **/useravatars** - Copy the contents of the useravatars directory.
 * **Settings.php** - Copy the Settings.php file.

All other resources can be restored from this git repository.

## Installation and backup recovery

To install the forums you will need to perform the following steps:

 1. Deploy this git repo (with submodule): `git clone --recursive [GIT URL]`
 2. Deploy the backup
 3. Make the relevant files/folders writable for the web server
