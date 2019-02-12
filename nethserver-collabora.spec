Summary: Nethserver Collabora Online configuration
Name: nethserver-collabora
Version: 0.1.0
Release: 1%{?dist}
License: GPL
Source: %{name}-%{version}.tar.gz
BuildArch: noarch

Requires: loolwsd CODE-brand

BuildRequires: nethserver-devtools

%description
Nethserver Collabora Online configuration

%prep
%setup -q

%build
%{makedocs}
perl createlinks

%install
rm -rf $RPM_BUILD_ROOT
(cd root   ; find . -depth -print | cpio -dump $RPM_BUILD_ROOT)
rm -f %{name}-%{version}-%{release}-filelist
%{genfilelist} $RPM_BUILD_ROOT \
> %{name}-%{version}-%{release}-filelist

%post

%files -f %{name}-%{version}-%{release}-filelist
%defattr(-,root,root)
%dir %{_nseventsdir}/%{name}-update
%doc COPYING

%changelog
* Tue Feb 12 2019 Matteo Valentini <matteo.valentini@nethesis.it> - 0.1.0-1
- Collabora Online integration - NethServer/dev#5700

