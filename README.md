# ParentPortal Moodle Plugin

## 👨‍👩‍👧 Overview

**ParentPortal** is a secure and scalable Moodle local plugin that provides parents and guardians with structured, read-only visibility into their child’s academic performance, attendance, course progress, and learning engagement.

Designed for schools, colleges, and blended learning environments, ParentPortal strengthens communication between institutions and families while maintaining strict privacy and access control.

The plugin improves student accountability, increases parental involvement, and reduces administrative communication overhead.

---

## ⭐ Key Benefits

✔ Strengthens parent engagement in student learning
✔ Provides real-time academic visibility
✔ Maintains strict privacy and role security
✔ Reduces teacher administrative workload
✔ Supports multi-child households
✔ Improves student performance monitoring

---

## 🚀 Core Features

### 📊 Parent Dashboard

Parents and guardians receive a unified dashboard displaying:

* Student grades by course
* Assignment and quiz performance
* Attendance records and late submissions
* Upcoming deadlines and course events
* Course completion progress

---

### 📈 Performance Analytics & Reports

Provides visual and downloadable performance insights:

* Student performance trend charts
* Early identification of struggling subjects
* Attendance trend monitoring
* Exportable PDF academic reports
* Meeting-ready academic summaries

---

### 🔔 Notification & Alert System

Automatically alerts parents when academic issues arise.

Supports:

* Missed assignment alerts
* Low grade notifications
* Attendance warning alerts
* Configurable notification frequency
* Optional SMS integration via external gateways

---

### 🔐 Secure Parent Access Control

Ensures data privacy and system security through:

* Role-based permission enforcement
* Parent-to-student assignment mapping
* Read-only academic visibility
* Teacher-controlled module visibility
* Multi-layer access validation

---

### 🧑‍🏫 Teacher & Administrator Controls

Educators and administrators can:

* Assign parents to students
* Configure visible courses and modules
* Customize alert thresholds
* Generate parent engagement reports
* Control dashboard data visibility

---

### 👨‍👩‍👧 Multi-Child Parent Support

Parents with multiple students can:

* Access all children from one account
* Switch between student dashboards
* Receive consolidated performance notifications

---

## 🧩 Technical Architecture

### Database Tables

#### `local_parentportal_assignments`

Stores assignment and grading data accessible to parents.

Fields:

* id
* studentid
* courseid
* assignmentid
* grade
* feedback

---

#### `local_parentportal_attendance`

Stores attendance records accessible to parents.

Fields:

* id
* studentid
* courseid
* sessiondate
* status

---

#### `local_parentportal_notifications`

Stores alert and notification history.

Fields:

* id
* parentid
* studentid
* courseid
* type
* message
* senttime

---

## 🔑 Capabilities

| Capability                                | Description                                          |
| ----------------------------------------- | ---------------------------------------------------- |
| `local/parentportal:viewgrades`           | Allows parents to view student grades                |
| `local/parentportal:viewattendance`       | Allows parents to view attendance records            |
| `local/parentportal:receivenotifications` | Allows parents to receive alerts                     |
| `local/parentportal:manageaccess`         | Allows teachers/admins to assign parents to students |

---

## ⚙ Admin Configuration

### 🌍 Global Settings

Administrators can configure:

* Enable or disable Parent Portal
* Notification delivery methods (Email/SMS)
* Maximum number of students per parent account
* Data visibility policies

---

### 📘 Course-Level Settings

Teachers can configure:

* Enable parent visibility per course
* Select visible modules and activities
* Customize course-specific notification rules

---

## 👥 User Experience

### 👨‍👩‍👧 Parent Experience

Parents can:

* Log into a dedicated parent dashboard
* View academic performance data
* Monitor attendance history
* Download academic progress reports
* Receive automated alerts

---

### 🧑‍🏫 Teacher/Admin Experience

Educators can:

* Assign parent accounts
* Manage visibility permissions
* Configure alert thresholds
* Monitor parent engagement analytics

---

## 💾 Backup & Restore Support

ParentPortal supports full Moodle backup and restore functionality including:

* Parent-child account assignments
* Portal configuration settings
* Notification history
* Course visibility rules

---

## 🌐 Web Services Integration

Optional API endpoints support:

* External reporting integrations
* SMS gateway integrations
* Third-party parent communication systems

---

## 🛡 Security & Privacy

ParentPortal implements enterprise-grade security including:

* Role-based data access enforcement
* Input validation and data sanitization
* Encrypted storage of sensitive mapping data
* Secure session authentication
* Compliance with Moodle privacy API

---

## ⚡ Performance Optimization

* Cached dashboard rendering
* Lazy-loaded report generation
* Efficient database indexing
* Cron-based background notification processing

---

## 🧪 Testing & Quality Assurance

ParentPortal includes PHPUnit test coverage for:

* Access control validation
* Notification delivery logic
* Dashboard data accuracy
* Backup and restore functionality

---

## 📥 Installation

### Step 1 — Install Plugin

Copy plugin directory into Moodle:

```
moodle/local/parentportal
```

---

### Step 2 — Activate Plugin

1. Login as Administrator
2. Navigate to:

```
Site administration → Notifications
```

3. Complete installation prompts

---

### Step 3 — Configure Plugin

Navigate to:

```
Site administration → Plugins → Local plugins → ParentPortal
```

---

## 🎯 Use Cases

✔ Primary & Secondary Schools
✔ Private Education Institutions
✔ Boarding Schools
✔ Distance Learning Programs
✔ Corporate Training with Sponsoring Organizations

---

## 🛣 Product Roadmap

Planned future enhancements include:

* Parent messaging system
* Real-time push notifications
* Parent mobile app integration
* Behaviour and discipline tracking
* Payment and fee visibility integration
* Multi-language dashboard support

---

## 🤝 Support & Custom Development

Enterprise deployments, customization, and integration services are available.

📧 Contact: **[johnmulama001@gmail.com](mailto:johnmulama001@gmail.com)**

---

## 📜 License

GPL v3 or later — Fully compliant with Moodle licensing standards.

---

## 👨‍💻 Developer

**John Mulama**
Senior Software Engineer
Moodle Plugin Specialist
Learning Systems Solutions Architect

---

## 🌟 Contributing

Contributions, feature suggestions, and issue reporting are welcome.
Please submit pull requests or open GitHub issues.

---

## 📸 Screenshots


If you want, I can help you design a **GitHub portfolio page that converts visitors into paying clients**. Just say the word.
