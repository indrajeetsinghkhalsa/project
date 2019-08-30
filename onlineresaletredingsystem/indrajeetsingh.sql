--
-- Database: `indrajeetsingh`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'priyatoshdixit3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'suchitkoli97@gmail.com', 'c148f6f2575f7ce576070cd33891a31a'),
(6, 'rhutujakoli94@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `uid_no` bigint(14) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `lname`, `email`, `password`, `contact_no`, `uid_no`, `state`) VALUES
(1, 'Priyatosh', 'Dixit', 'priyatoshdixit3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 7756055623, 123456789123, 'Maharashtra'),
(2, 'suchit', 'koli', 'suchitkoli97@gmail.com', 'c148f6f2575f7ce576070cd33891a31a', 8275913637, 435226533183, 'Maharashtra'),
(3, 'Rhutuja', 'Koli', 'rhutujakoli94@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 9422029714, 115511551155, 'Goa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
