The AMI selected for the project is the
SUSE Linux Enterprise Server 15 SP2 (HVM),
SSD Volume Type - ami-
051cbea0e7660063d (64-bit x86) / ami-01b29647f47846dc1 (64-bit Arm)
SUSE Linux Enterprise Server 15 Service Pack 2 (HVM), 
EBS General Purpose (SSD) Volume Type. 
Public Cloud, Advanced Systems Management, Web and Scripting, and Legacy modules enabled.
Root device type: ebs 
Virtualization type: hvm 
ENA Enabled: Yes
The minimum configuration is the: t2.micro (- ECUs, 1 vCPUs, 2.5 GHz, -, 1 GiB memory, EBS only)
I suggest we use the: t2.2xlarge (- ECUs, 8 vCPUs, 2.3 GHz, -, 32 GiB memory, EBS only)
The t2.2xlarge comes with 8 CPU’s and 32GiB which will provide adequate performance for the website from a hardware perspective.

