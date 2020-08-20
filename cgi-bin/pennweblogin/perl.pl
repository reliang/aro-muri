#!/usr/bin/env perl
use strict;
use CGI qw(:standard);
use CGI::Carp qw(warningsToBrowser fatalsToBrowser);

# header
print header("text/plain");

# content
foreach my $key (sort(keys(%ENV))) {
    print "$key = $ENV{$key}\n";
}

