/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package student.feedback.system;

import java.beans.PropertyChangeListener;
import java.beans.PropertyChangeSupport;
import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.persistence.Transient;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author santosh
 */
@Entity
@Table(name = "teacher")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "Teacher.findAll", query = "SELECT t FROM Teacher t"),
    @NamedQuery(name = "Teacher.findByTId", query = "SELECT t FROM Teacher t WHERE t.tId = :tId"),
    @NamedQuery(name = "Teacher.findByPassword", query = "SELECT t FROM Teacher t WHERE t.password = :password"),
    @NamedQuery(name = "Teacher.findByFName", query = "SELECT t FROM Teacher t WHERE t.fName = :fName"),
    @NamedQuery(name = "Teacher.findByLName", query = "SELECT t FROM Teacher t WHERE t.lName = :lName"),
    @NamedQuery(name = "Teacher.findByGender", query = "SELECT t FROM Teacher t WHERE t.gender = :gender"),
    @NamedQuery(name = "Teacher.findByMobileNumber", query = "SELECT t FROM Teacher t WHERE t.mobileNumber = :mobileNumber"),
    @NamedQuery(name = "Teacher.findByEmailId", query = "SELECT t FROM Teacher t WHERE t.emailId = :emailId"),
    @NamedQuery(name = "Teacher.findByExperience", query = "SELECT t FROM Teacher t WHERE t.experience = :experience"),
    @NamedQuery(name = "Teacher.findByQualification", query = "SELECT t FROM Teacher t WHERE t.qualification = :qualification"),
    @NamedQuery(name = "Teacher.findByBranch", query = "SELECT t FROM Teacher t WHERE t.branch = :branch"),
    @NamedQuery(name = "Teacher.findBySemester", query = "SELECT t FROM Teacher t WHERE t.semester = :semester")})
public class Teacher implements Serializable {

    @Transient
    private PropertyChangeSupport changeSupport = new PropertyChangeSupport(this);

    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "t_id")
    private String tId;
    @Column(name = "password")
    private String password;
    @Column(name = "f_name")
    private String fName;
    @Column(name = "l_name")
    private String lName;
    @Column(name = "gender")
    private String gender;
    @Column(name = "mobile_number")
    private Integer mobileNumber;
    @Column(name = "email_id")
    private String emailId;
    @Column(name = "experience")
    private String experience;
    @Column(name = "qualification")
    private String qualification;
    @Column(name = "branch")
    private String branch;
    @Column(name = "semester")
    private String semester;

    public Teacher() {
    }

    public Teacher(String tId) {
        this.tId = tId;
    }

    public String getTId() {
        return tId;
    }

    public void setTId(String tId) {
        String oldTId = this.tId;
        this.tId = tId;
        changeSupport.firePropertyChange("TId", oldTId, tId);
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        String oldPassword = this.password;
        this.password = password;
        changeSupport.firePropertyChange("password", oldPassword, password);
    }

    public String getFName() {
        return fName;
    }

    public void setFName(String fName) {
        String oldFName = this.fName;
        this.fName = fName;
        changeSupport.firePropertyChange("FName", oldFName, fName);
    }

    public String getLName() {
        return lName;
    }

    public void setLName(String lName) {
        String oldLName = this.lName;
        this.lName = lName;
        changeSupport.firePropertyChange("LName", oldLName, lName);
    }

    public String getGender() {
        return gender;
    }

    public void setGender(String gender) {
        String oldGender = this.gender;
        this.gender = gender;
        changeSupport.firePropertyChange("gender", oldGender, gender);
    }

    public Integer getMobileNumber() {
        return mobileNumber;
    }

    public void setMobileNumber(Integer mobileNumber) {
        Integer oldMobileNumber = this.mobileNumber;
        this.mobileNumber = mobileNumber;
        changeSupport.firePropertyChange("mobileNumber", oldMobileNumber, mobileNumber);
    }

    public String getEmailId() {
        return emailId;
    }

    public void setEmailId(String emailId) {
        String oldEmailId = this.emailId;
        this.emailId = emailId;
        changeSupport.firePropertyChange("emailId", oldEmailId, emailId);
    }

    public String getExperience() {
        return experience;
    }

    public void setExperience(String experience) {
        String oldExperience = this.experience;
        this.experience = experience;
        changeSupport.firePropertyChange("experience", oldExperience, experience);
    }

    public String getQualification() {
        return qualification;
    }

    public void setQualification(String qualification) {
        String oldQualification = this.qualification;
        this.qualification = qualification;
        changeSupport.firePropertyChange("qualification", oldQualification, qualification);
    }

    public String getBranch() {
        return branch;
    }

    public void setBranch(String branch) {
        String oldBranch = this.branch;
        this.branch = branch;
        changeSupport.firePropertyChange("branch", oldBranch, branch);
    }

    public String getSemester() {
        return semester;
    }

    public void setSemester(String semester) {
        String oldSemester = this.semester;
        this.semester = semester;
        changeSupport.firePropertyChange("semester", oldSemester, semester);
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (tId != null ? tId.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Teacher)) {
            return false;
        }
        Teacher other = (Teacher) object;
        if ((this.tId == null && other.tId != null) || (this.tId != null && !this.tId.equals(other.tId))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "student.feedback.system.Teacher[ tId=" + tId + " ]";
    }

    public void addPropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.addPropertyChangeListener(listener);
    }

    public void removePropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.removePropertyChangeListener(listener);
    }
    
}
